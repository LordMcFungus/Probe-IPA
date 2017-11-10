/**
 * Created by Alain on 03.11.2017.
 */

/**
 * Calls php method for creating new Inserat
 */
function createInserat() {
    var title=$("#Title").val();
    var description=$("#Description").val();
    var phone=$("#Phone").val();
    var mail=$("#Mail").val();
    var place=$("#Place").val();
    var type=$("#Type").val();


    var dataString = 'Title='+title+'&Description='+description+'&Mail='+mail+'&Phone='+phone+'&Place='+place+'&Type='+type;

    $.ajax({
        type: "GET",
        url: "inserat/inseratInput.php",
        data: dataString,
        cache: false,
        success: function(data){

            if(data == "Success"){
                alert('Inserat wurde erstellt');
                loadContent();
            } else {
                alert("Fehlgeschlagen");
            }
        },
        error: function (request, status, error) {
            //Shake animation effect.

        }
    });
}

/**
 *  Opens php method for showing the new Inserat Formular
 */
function openInseratForm() {
    $.ajax({
        type: "GET",
        url: 'view/createInseratView.php',
        cache: false,
        success: function(data){
            $('#mainContent').empty();
            $('#mainContent').append(data);
        },
        error: function (request, status, error) {
            //Shake animation effect.
            alert(error);
        }
    });
}

/**
 * Gos to next page in the Mainpage
 */
function nextPage() {
    var currentPage = sessionStorage.getItem("CurrentPage");
    sessionStorage.setItem("CurrentPage", parseInt(currentPage) + 1);
    loadInserate();
}

/**
 * Go to previous page in the Mainpage
 */
function previousPage() {
    var currentPage = sessionStorage.getItem("CurrentPage");
    sessionStorage.setItem("CurrentPage", parseInt(currentPage) - 1);
    loadInserate();
}

/**
 * Loads the Inserate for one page from the Server
 */
function loadInserate() {

    var currentPage = sessionStorage.getItem("CurrentPage");

    var dataString = 'CurrentPage='+currentPage;

    $.ajax({
        type: "GET",
        url: "view/allInserateView.php",
        data: dataString,
        cache: false,
        success: function(data){

            $('#mainContent').empty();
            $('#mainContent').append(data);
        },
        error: function (request, status, error) {
            //Shake animation effect.

        }
    });
}