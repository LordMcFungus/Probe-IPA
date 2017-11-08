/**
 * Created by Alain on 03.11.2017.
 */


function createInserat() {
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
        url: "input/registerInput.php",
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