<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: application/json');

$reqArray;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $reqArray = array('Type' => 'GET', 'parameters' => $_GET);
    if (count($_GET) == 0) {
        $reqArray['parameters'] = null;
    }
}
else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reqArray = array('Type' => 'POST', 'parameters' => $_POST);
    if (count($_POST) == 0) {
        $reqArray['parameters'] = null;
    }
}
else {
    die('<p>Invalid request.');
}

echo json_encode($reqArray, JSON_FORCE_OBJECT);

?>

