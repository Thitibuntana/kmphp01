<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Result with PHP 06</h1>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
    ?>
        <div>
            <strong>Name: </strong>
            <?php echo empty($_GET["fname"]) ? "-" : $_GET["fname"]; ?>
            <?php echo empty($_GET["lname"]) ? "-" : $_GET["lname"]; ?>
        </div>
        <div>
            <strong>Password: </strong>
            <?php echo empty($_GET["password"]) ? "-" : $_GET["password"]; ?>
        </div>
        <div>
            <strong>Age: </strong>
            <?php echo empty($_GET["age"]) ? "-" : $_GET["age"]; ?>
        </div>
        <div>
            <strong>Phone: </strong>
            <?php echo empty($_GET["phone"]) ? "-" : $_GET["phone"]; ?>
        </div>
        <div>
            <strong>Gender: </strong>
            <?php echo empty($_GET["gender"]) ? "-" : $_GET["gender"]; ?>
        </div>
        <div>
            <strong>Birthday: </strong>
            <?php echo empty($_GET["bdate"]) ? "-" : $_GET["bdate"]; ?>
        </div>
        <div>
            <strong>Programming Language: </strong>
            <?php echo isset($_GET["plang"]) ? $_GET["plang"] : "-"; ?>
        </div>
        <div>
            <strong>Favourite Food: </strong>
            <?php
            if (isset($_GET["food1"]) && $_GET["food2"] && $_GET["food3"] && $_GET["food4"]) {
                echo "-";
            };
            echo isset($_GET["food1"]) ? $_GET["food1"] : "-"; 
            echo isset($_GET["food2"]) ? $_GET["food2"] : "-"; 
            echo isset($_GET["food3"]) ? $_GET["food3"] : "-"; 
            echo isset($_GET["food4"]) ? $_GET["food4"] : "-"; 
            ?>
        </div>
        <div>
            <strong>Favourite Country: </strong>
            <?php echo empty($_GET["country"]) ? "-" : $_GET["country"]; ?>
        </div>
        <div>
            <strong>Favourite Province: </strong>
            <?php echo empty($_GET["province"]) ? "-" : $_GET["province"]; ?>
        </div>
        <div>
            <strong>Like Level: </strong>
            <?php echo empty($_GET["likelevel"]) ? "-" : $_GET["likelevel"]; ?>
        </div>
        <div>
            <strong>Comment: </strong>
            <?php echo empty($_GET["comment"]) ? "-" : $_GET["comment"]; ?>
        </div>
    <?php }else{
        echo "NO DATA";
    }
    ?>
</body>
</html>