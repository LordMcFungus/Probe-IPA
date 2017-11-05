/**
 * Created by Alain on 03.11.2017.
 */

function loadContent(){

}

function loadRegisteredPage() {

    alert("swag");
    $.ajax({
        type: "GET",
        url: "view/headerView.php",
        cache: false,
        success: function(data){
            alert(data);
         /*   $('#headerContent').empty();
            $('#headerContent').append(data); */
        },
        error: function (request, status, error) {
            //Shake animation effect.

        }
    });
}