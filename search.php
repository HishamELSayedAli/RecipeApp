<?php 
include "recipe.php";
include "favourite.php";
if (isset($_POST['key'])) {
    $searchKey = $_POST['key']; 
    $query = $conn->prepare("SELECT * FROM recipes WHERE name LIKE :keyword");
    $query->bindValue(':keyword', '%'.$searchKey.'%');
    $query->execute();
    $recipes = $query->fetchAll();
    $rows = $query->rowCount();
} else {
    header('location:recipeApp.php');
    exit;
}
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
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <title>Recipe App</title>
</head>
<body>
    <div class="conntainer">
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="recipeApp.php">Home</a>
                <a href="game.html">Game</a>
                <a href="addRecipe.php">Add recipe</a>
            </div>
            <span style="cursor: pointer;" onclick="openNav()">&#9776; menu</span>
        </header>
        <div class="searchBar">
            <form class="search" action="search.php" method="post">
                <input type="search" placeholder="Search" name="key">
            </form>
        </div>        
    </div>

    <?php if (!empty($favourite) && is_array($favourite)): ?>
    <div class="row">
        <?php foreach ($favourite as $fav) { ?>
            <div class="card">
                <a class="xmark" href="deleteFavourite.php?id=<?= $fav['id'] ?>" title="Remove">
                    <i class="fa-solid fa-xmark"></i>
                </a>

                <div class="favourite">
                    <a href="details.php?id=<?= $fav['re_id'] ?>">
                        <?php if (!empty($fav['iamge'])): ?>
                            <img class="img" src="<?= htmlspecialchars($fav['iamge']) ?>" alt="<?= htmlspecialchars($fav['name']) ?>">
                        <?php endif; ?>
                    </a>
                </div>

                <h3><?= htmlspecialchars($fav['name']) ?></h3>
            </div>
        <?php } ?>
    </div>
    <?php endif; ?>

    <?php if ($rows != 0): ?>
    <div class="recipes-container">
        <?php foreach ($recipes as $recipe) { ?>
            <section class="recipe">
                <div class="recipe-img">
                    <?php if (!empty($recipe['iamge'])): ?>
                        <img class="img" src="<?= htmlspecialchars($recipe['iamge']) ?>" alt="<?= htmlspecialchars($recipe['name']) ?>">
                    <?php else: ?>
                        <div style="padding: 40px; text-align: center; color: #999;">No Image</div>
                    <?php endif; ?>
                </div>
                <div class="recipeText">
                    <h3><span><?= htmlspecialchars($recipe['name']) ?></span></h3>
                    <p class="content"><?= htmlspecialchars($recipe['recipe']) ?></p>
                </div>

                <form method="post" action="insertFavourite.php" class="fav-form">
                    <input type="hidden" name="id" value="<?= $recipe['id'] ?>">
                    <button type="submit" class="fav-btn" title="Add to Favourites">
                        <i class="fa-solid fa-heart heart"></i>
                    </button>
                </form>
            </section>
        <?php } ?>
    </div>
    <?php else: ?>
        <h3 style="text-align:center; padding: 40px;">There is no recipe with this name</h3>
    <?php endif; ?>

<script src="js/script.js"></script>    
</body>
</html>