<?php
include "recipe.php";
include "favourite.php";

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
    <link rel="stylesheet" href="css/style.css">
    <title>Recipe App</title>
</head>

<body>
    <div class="conntainer">
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="recipeApp.php">Home</a><hr>
                <a href="game.html">Game</a><hr>
                <a href="addRecipe.php">Add recipe</a>
            </div>
            <span style="cursor: pointer;" onclick="openNav()">&#9776; menu</span>
        </header>
        <div class="searchBar">
            <form class="search" action="search.php" method="post">
                <input type="search" placeholder="Search" name="key">
            </form>
            <?php

            ?>
        </div>
    </div>
    <div class="row">
        <?php foreach ($favourite as $key) { ?>
            <div class="card">
                <div>
                    <a class="xmark" href="deleteFavourite.php?id=<?= $key['id'] ?>">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </div>
                <div class="favourite">
                    <a href="details.php?id=<?= $key['id']?>"><h3>Details</h3></a>
                    </div>
                    <h3><?= $key['name'] ?></h3>
            </div>
        <?php } ?>
    </div>
    <?php
    foreach ($recipes as $recipe) { ?>
        <section class="recipe">
            <div class="recipe-img">
            <?= '<img class="img" width="100%" height="500vh" src="data:image;base64,
                     '.base64_encode($recipe['iamge']).'" alt="..">'?>
            </div>
            <div class="recipeText">
                <h3><span>Name: </span><?= $recipe['name'] ?></h3>
                <p class="content"><?= $recipe['recipe'] ?>
                </p>
            </div>
            <form method="post" action="insertFavourite.php" style="display: flex;justify-content: end;">
                <input type="hidden" name="id" value="<?= $recipe['id'] ?>">
                <input type="hidden" name="name" value="<?= $recipe['name'] ?>">
                <input type="hidden" name="recipe" value="<?= $recipe['recipe'] ?>">
                <input type="hidden" name="iamge" value="<?=base64_encode($recipe['iamge'])?>">
                <button>
                    <i class="fa-solid fa-heart heart" style="font-size:x-large;"></i>
                </button>
            </form>
        </section>
    <?php }

    ?>


















    <script src="js/script.js"></script>
</body>

</html>