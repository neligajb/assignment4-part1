<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
//much of the following block of session handling code is borrowed from the "PHP Sessions" lecture
if (!(isset($_SESSION['username']))) {
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
    <title>content2.php</title>
</head>
<body>
    <p>Some more really great content!  Here is a <a href="/~neliganj/assignment4-part1/content1.php">link</a> back to the first content page.</p>
</body>
</html>