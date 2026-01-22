<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];

    if( empty($n1) == true || empty($n2) == true){
        echo "CAN'T BE EMPTY!!";
        header("Location: dti_05.php");
    }
    if( floatval($n1) <= 0 || intval($n2) <= 0){
        echo "CAN'T BE NEGATIVE/ZERO!!";
        header("Location: dti_05.php");
    }

    $result = $n1 / $n2;
    echo "MONEY IS " . $result;
    ?>
</body>
</html>