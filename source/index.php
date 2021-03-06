<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserator</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="inserat/inserat.js"></script>
    <script src="login/login.js"></script>
    <script src="login/register.js"></script>
    <script src="js/load.js"></script>
    <script src="js/Jquery3.2.1.js"></script>
</head>
<body onload="loadContent()">
    <div id="container">
        <header>
            <div id="headerContent" >
                <div id="headerButtonContainer">
                    <a onclick="showLogin()" class="headerButton" id="loginButton">Login</a>
                    <a onclick="showRegister()" class="headerButton" id="registerButton" >Registrieren</a>
                </div>
                <div class="floatClear"></div>
            </div>
        </header>

        <main id="mainContent">

        </main>
    </div>

</body>
</html>