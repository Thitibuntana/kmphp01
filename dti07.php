<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], input[type="password"], input[type="tel"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="date"] {
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            padding: 8px;
        }
        input[type="reset"] {
            background-color: #e73838;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP 06</h1>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="">
<div class="form-group">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname">
    </div>
    <div class="form-group">
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname">
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="age">Age: </label>
        <input type="number" id="age" name="age">
    </div>
    <div class="form-group">
        <label for="phone">Phone: </label>
        <input type="tel" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="radio" value="male" name="gender" id="male"> Male
        <input type="radio" value="female" name="gender" id="female"> Female
        <input type="radio" value="LGBTQ+" name="gender" id="lgbtq"> LGBTQ+
    </div>
    <div class="form-group">
        <label for="programming_language">Favourite Programming Language</label>
        <input type="checkbox" value="C" name="plang[]" id="C"> C
        <input type="checkbox" value="Java" name="plang[]" id="Java"> Java
        <input type="checkbox" value="Python" name="plang[]" id="Python"> Python
        <input type="checkbox" value="PHP" name="plang[]" id="PHP"> PHP
    </div>
    <div class="form-group">
        <label for="food">Favourite Food</label>
        <input type="checkbox" value="Fried Chicken" name="food1" id="Fried Chicken"> Fried Chicken
        <input type="checkbox" value="Pizza" name="food2" id="Pizza"> Pizza
        <input type="checkbox" value="Burger" name="food3" id="Burger"> Burger
        <input type="checkbox" value="Sushi" name="food4" id="Sushi"> Sushi
    </div>
    <div class="form-group">
        <label for="country">Favourite Country</label>
    <select name="country" id="country">
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="UK">UK</option>
        <option value="Australia">Australia</option>
    </select>
    </div>
    <div class="form-group">
        <label for="province">Favourite Province</label>
    <select name="province" id="province" size="4">
        <option value="Chiang Mai">Chiang Mai</option>
        <option value="Bangkok">Bangkok</option>
        <option value="Phuket">Phuket</option>
        <option value="Chonburi">Chonburi</option>
    </select>
    </div>
    <div class="form-group">
        <label for="bdate">Birthday</label>
        <input type="date" name="bdate" id="bdate">
    </div>
    <div class="form-group">
        <label for="likelevel">Like Level</label>
        0<input type="range" name="likelevel" id="likelevel">100
    </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="4"></textarea>
    </div>
    <input type="hidden" name="message" value="INPUT 1">
    <div class="form-group">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </div>
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    ?>
        <div>
            <strong>Name: </strong>
            <?php echo empty($_POST["fname"]) ? "-" : $_POST["fname"]; ?>
            <?php echo empty($_POST["lname"]) ? "-" : $_POST["lname"]; ?>
        </div>
        <div>
            <strong>Password: </strong>
            <?php echo empty($_POST["password"]) ? "-" : $_POST["password"]; ?>
        </div>
        <div>
            <strong>Age: </strong>
            <?php echo empty($_POST["age"]) ? "-" : $_POST["age"]; ?>
        </div>
        <div>
            <strong>Phone: </strong>
            <?php echo empty($_POST["phone"]) ? "-" : $_POST["phone"]; ?>
        </div>
        <div>
            <strong>Gender: </strong>
            <?php echo empty($_POST["gender"]) ? "-" : $_POST["gender"]; ?>
        </div>
        <div>
            <strong>Birthday: </strong>
            <?php echo empty($_POST["bdate"]) ? "-" : $_POST["bdate"]; ?>
        </div>
        <div>
            <strong>Programming Language: </strong>
            <?php echo isset($_POST["plang"]) ? $_POST["plang"] : "-"; ?>
        </div>
        <div>
            <strong>Favourite Food: </strong>
            <?php
            if (isset($_POST["food1"]) && $_POST["food2"] && $_POST["food3"] && $_POST["food4"]) {
                echo "-";
            };
            echo isset($_POST["food1"]) ? $_POST["food1"] : "-"; 
            echo isset($_POST["food2"]) ? $_POST["food2"] : "-"; 
            echo isset($_POST["food3"]) ? $_POST["food3"] : "-"; 
            echo isset($_POST["food4"]) ? $_POST["food4"] : "-"; 
            ?>
        </div>
        <div>
            <strong>Favourite Country: </strong>
            <?php echo empty($_POST["country"]) ? "-" : $_POST["country"]; ?>
        </div>
        <div>
            <strong>Favourite Province: </strong>
            <?php echo empty($_POST["province"]) ? "-" : $_POST["province"]; ?>
        </div>
        <div>
            <strong>Like Level: </strong>
            <?php echo empty($_POST["likelevel"]) ? "-" : $_POST["likelevel"]; ?>
        </div>
        <div>
            <strong>Comment: </strong>
            <?php echo empty($_POST["comment"]) ? "-" : $_POST["comment"]; ?>
        </div>
    <?php }else{
        echo "NO DATA";
    }
    ?>
</body>
</html>