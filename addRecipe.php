<?php
include "recipe.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==' crossorigin='anonymous' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,200&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1.3">
    <title>Add Recipe - Recipe App</title>
</head>

<body>
    <!-- Top Header Navigation -->
    <div class="conntainer">
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="recipeApp.php">Home</a>
                <hr>
                <a href="game.html">Game</a>
                <hr>
                <a href="addRecipe.php">Add recipe</a>
            </div>
            <span class="menu-trigger" onclick="openNav()">&#9776; menu</span>
        </header>
    </div>

    <!-- Main Content Form Section -->
    <main class="main-content">
        <div class="section-title">
            <h2><i class="fa-solid fa-plus-circle"></i> Add New Recipe</h2>
        </div>

        <div class="add">
            <form class="addRecipe" action="insertRecipe.php" method="post" enctype="multipart/form-data">

                <input class="name" type="text" name="name" placeholder="Please insert recipe name" required>

                <textarea name="recipe" placeholder="Please insert recipe details..." rows="5" required></textarea>

                <input type="file" name="file" required accept="image/jpg, image/jpeg, image/png">

                <button class="submit" type="submit">Add Recipe</button>

            </form>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>

</html>