/**
 * Created by Alain on 03.11.2017.
 */

function loadContent(){
    $.ajax({
        type: "GET",
        url: "view/headerView.php",
        cache: false,
        success: function(data){
            $('#headerContent').empty();
            $('#headerContent').append(data);
        },
        error: function (request, status, error) {
            //Shake animation effect.

        }
    });

    sessionStorage.setItem("CurrentPage", 1);
   // sessionStorage.getItem("CurrentPage");
    loadInserate();
}