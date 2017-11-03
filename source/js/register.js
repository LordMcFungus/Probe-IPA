/**
 * Created by Alain on 03.11.2017.
 */

function showRegister() {
    alert("Swag");
}

function register() {

    var username=$("#RegisterUsername").val();
    var name=$("#Name").val();
    var surname=$("#Surname").val();
    var mail=$("#Mail").val();
    var password=$("#RegisterPassword").val();
    var repPassword=$("#RepPassword").val();

    var dataString = 'Username='+username+'&Name='+name+'&Surname='+surname+'&Mail='+mail+'&Password='+password+'&RepPassword='+repPassword;


    $.ajax({
        type: "POST",
        url: "RegisterInput.php",
        data: dataString,
        cache: false,
        beforeSend: function(){ $("#Submit").val('Verbinde...');},
        success: function(data){
            fadeToHome();
        },
        error: function (request, status, error) {
            //Shake animation effect.
            $("#registerform").effect("shake", {times: 2}, 750);
            $("#Submit").val('✖');
            setTimeout(function () {
                $('#Submit').val('Registrieren')
            }, 750);
        }
    });
}
