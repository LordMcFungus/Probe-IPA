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

function login() {
    var username=$("#Username").val();
    var password=$("#Password").val();

    var dataString = 'Username='+username+ '&Password='+password;

    $.ajax({
        type: "GET",
        url: "login/loginInput.php",
        data: dataString,
        cache: false,
        success: function(data){

            if(data == "Success"){
                loadContent();
            }
            else {
            }
        },
        error: function (request, status, error) {


        }
    });
}

function logout() {
    $.ajax({
        type: "GET",
        url: 'login/logout.php',
        cache: false,
        success: function(data){
            loadContent();
        },
        error: function (request, status, error) {
            //Shake animation effect.
            alert(error);
        }
    });
}