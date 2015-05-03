<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//the following block of session handling code is borrowed from the "PHP Sessions" lecture
session_start();
if (isset($_GET['action']) && $_GET['action'] == 'end') {
    $_SESSION = array();
    session_destroy();
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/', $filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/login.php", true);
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>content1.php</title>
</head>
<body>
    <?php

    if (isset($_POST['username']) && $_POST['username'] == '') {
        echo '<p>A username must be entered. Click <a href="/login.php/">here</a> to return to the login screen.';
        die();
    }

    if (session_status() == PHP_SESSION_ACTIVE){
        if (isset($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
        }

        if (!isset($_SESSION['visits'])) {
            $_SESSION['visits'] = 0;
        }

        $_SESSION['visits']++;
        echo "<p>Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before.";
    }
    echo '<p>Click <a href="content1.php?action=end">here</a> to logout.';

    ?>

</body>
</html>