<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ((isset($_SESSION['username']))) {
    $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filePath = implode('/', $filePath);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
    header("Location: {$redirect}/content1.php", true);
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>login.php</title>
</head>
<body>
    <div>
        <form action="content1.php" method="post">
            <p>Username: <input type="text" name="username" /></p>
            <p><input type="submit" /></p>
        </form>
    </div>
</body>
</html>