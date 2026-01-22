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
    <form action="./dti06_result.php" method="GET" enctype="">
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
</body>
</html>