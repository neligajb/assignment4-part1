<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>loopback.php</title>
</head>
<body>
    <?php
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

    echo json_encode($reqArray, JSON_FORCE_OBJECT);

    ?>
</body>
</html>
