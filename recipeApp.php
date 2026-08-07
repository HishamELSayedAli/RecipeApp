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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <title>Recipe App</title>
</head>

<body>
    <!-- Navigation Bar -->
    <header class="conntainer">
        <div class="menu-trigger" onclick="openNav()">
            <i class="fa-solid fa-bars"></i>
            <span>Menu</span>
        </div>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="recipeApp.php"><i class="fa-solid fa-house"></i> Home</a>
            <hr>
            <a href="game.html"><i class="fa-solid fa-gamepad"></i> Game</a>
            <hr>
            <a href="addRecipe.php"><i class="fa-solid fa-circle-plus"></i> Add Recipe</a>
        </div>

        <div class="searchBar">
            <form class="search" action="search.php" method="post">
                <input type="search" placeholder="Search recipes..." name="key">
                <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </header>

    <main class="main-content">
        <!-- Favourites Section -->
        <div class="section-title">
            <h2><i class="fa-solid fa-heart"></i> Favourites</h2>
        </div>

        <div class="row">
            <?php foreach ($favourite as $key): ?>

                <div class="card">
                <a class="xmark" href="deleteFavourite.php?id=<?= $key['id'] ?>" title="Remove">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                <div class="favourite">
                    <a href="details.php?id=<?= $key['re_id'] ?>">
                        <?php if (!empty($key['iamge'])): ?>
                            <img class="img" src="<?= htmlspecialchars($key['iamge']) ?>" alt="<?= htmlspecialchars($key['name']) ?>" >
                        
                        <?php endif; ?>
                    </a>
                </div>

                
            </div>

            <?php endforeach; ?>
        </div>

        <!-- Recipes Section -->
        <div class="section-title">
            <h2><i class="fa-solid fa-utensils"></i> All Recipes</h2>
        </div>

        <div class="recipes-container">
            <?php foreach ($recipes as $recipe) { ?>
                <section class="recipe">
                    <div class="recipe-img">
                        <?php if (!empty($recipe['iamge'])): ?>
                            <img src="<?= $recipe['iamge'] ?>" class="img">
                        <?php else: ?>
                            <div style="padding: 40px; text-align: center; color: #999;">No Image</div>
                        <?php endif; ?>
                    </div>

                    <div class="recipeText">
                        <h3>
                            <span><?= htmlspecialchars($recipe['name']) ?></span>
                        </h3>
                        <p class="content">
                            <?= htmlspecialchars($recipe['recipe']) ?>
                        </p>
                    </div>

                    <form method="POST" action="insertFavourite.php">

                        <input type="hidden" name="id" value="<?= $recipe['id'] ?>">

                        <div class="fav-form">
                            <form method="POST" action="insertFavourite.php">
                                <input type="hidden" name="id" value="<?= $recipe['id'] ?>">
                                <button type="submit" class="fav-btn" title="Add Favourite">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                            </form>
                        </div>

                    </form>
                </section>
            <?php } ?>
        </div>
    </main>



    <script src="js/script.js"></script>
</body>

</html>