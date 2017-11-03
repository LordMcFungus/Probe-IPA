/**
 * Created by Alain on 03.11.2017.
 */

function showLogin() {
        $.ajax({
            type: "GET",
            url: 'view/loginView.php',
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