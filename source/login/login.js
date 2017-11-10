/**
 * Created by Alain on 03.11.2017.
 */

/**
 * Shows Loginformular for the User to login
 * Called when Loginbutton is clicked
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

/**
 * sends inputed data to server for further validation
 * Invoked by Loginbutton in Loginform
 */
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
                errorPrint = "<p>Login Fehlgeschlagen</p>";
                $('#loginErrorContainer').empty();
                $('#loginErrorContainer').append(errorPrint);
            }
        },
        error: function (request, status, error) {


        }
    });
}
/**
 * Sends request to Server for the User to get logged out
 */
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