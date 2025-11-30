<?php
include "recipe.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous'/> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,200&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Recipe App</title>
</head>
<body>
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="recipeApp.php">Home</a>
                <a href="game.html">Game</a>
                <a href="addRecipe.php">Add recipe</a>
            </div>
            <span style="cursor: pointer;" onclick="openNav()">&#9776; menu</span>
        </header>
        <div class="add">
            <form class="addRecipe" action="insertRecipe.php" method="post">
                <input  class="name" type="text" name="name"  placeholder="Please insert name">
                <input type="text" name="recipe"  placeholder="Please insert recipe">
                <input type="file" name="files[]" required multiple accept="iamge/jpg, iamge/jpeg, 
                iamge/png">
                <button class="submit" type="submit" >Add</button>
            </form>
        </div>



        
        
        
        
        
        
        
    
    
    
    
    
        <script src="js/script.js"></script>    
</body>
</html>