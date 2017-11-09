<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 13:55
 */

require_once 'InseratController.php';

$model = new inseratModel();

$id = $_GET['id'];

$data = $model->loadInserateById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserator</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="inserat.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/load.js"></script>
    <script src="../js/Jquery3.2.1.js"></script>
</head>
<body onload="loadContent()">
    <header>
        <div id="headerContent">
            <a class="headerButton" id="loginButton" href="../index.php">Zurück</a>
            <div class="floatClear"></div>
        </div>
    </header>

    <main id="mainContent">
        <h2><?php echo $data['name']; ?></h2>
        <h2>Typ</h2>
        <p><?php echo $data['type']; ?></p>
        <h2>Beschreibung</h2>
        <p><?php echo $data['description']; ?></p>
        <h2>Ort</h2>
        <p><?php echo $data['location']; ?></p>
        <h2>Telefon</h2>
        <p><?php echo $data['phone']; ?></p>
        <h2>E-Mail</h2>
        <p><?php echo $data['email']; ?></p>

    </main>
</body>
</html>