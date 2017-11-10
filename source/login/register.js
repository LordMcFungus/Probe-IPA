/**
 * Created by Alain on 03.11.2017.
 */

/**
 * Sow register form
 * Invoked by RegsiterButton in header
 */
function showRegister() {
    $.ajax({
        type: "GET",
        url: 'view/registerView.php',
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
 * Sends inputed registerdata to server for further validation
 * invoked by registerbutton in registerform
 */
function register() {

    var username=$("#RegisterUsername").val();
    var name=$("#Name").val();
    var surname=$("#Surname").val();
    var mail=$("#Mail").val();
    var phone=$("#Phone").val();
    var password=$("#RegisterPassword").val();
    var repPassword=$("#RepPassword").val();

    var dataString = 'Username='+username+'&Name='+name+'&Surname='+surname+'&Mail='+mail+'&Phone='+phone+'&Password='+password+'&RepPassword='+repPassword;

    $.ajax({
        type: "GET",
        url: "login/registerInput.php",
        data: dataString,
        cache: false,
        success: function(data){

            if(data == "Success"){
                loadContent();

            }
        },
        error: function (request, status, error) {
            //Shake animation effect.

        }
    });
}
