<?php
include "favourite.php";
include "connect.php";

$favouriteItem = null;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // استعلام آمن لجلب بيانات الوصفة المحددة من جدول recipes
    $query = $conn->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->execute([':id' => $id]);
    $favouriteItem = $query->fetch(PDO::FETCH_ASSOC);
}
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
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <title><?= $favouriteItem ? htmlspecialchars($favouriteItem['name']) : 'Recipe Details' ?></title>
</head>

<body>
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
            <span style="cursor: pointer;" onclick="openNav()">&#9776; menu</span>
        </header>
        <div class="searchBar">
            <form class="search" action="search.php" method="post">
                <input type="search" placeholder="Search" name="key">
            </form>
        </div>
    </div>

    <!-- Carousel Row (الشريط العلوي) -->
    <?php if (!empty($favourite) && is_array($favourite)): ?>
    <div class="row">
        <?php foreach ($favourite as $key) { ?>
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
        <?php } ?>
    </div>
    <?php endif; ?>

    <!-- Details Section (تفاصيل الوصفة) -->
    <main class="main-content details-page">
        <div class="section-title">
            <h2><i class="fa-solid fa-utensils"></i> Recipe Details</h2>
        </div>

        <?php if ($favouriteItem): ?>
            <section class="recipe">
                <div class="recipe-img">
                    <?php if (!empty($favouriteItem['iamge'])): ?>
                        <img class="img" src="<?= htmlspecialchars($favouriteItem['iamge']) ?>" alt="<?= htmlspecialchars($favouriteItem['name']) ?>">
                    <?php else: ?>
                        <p style="text-align: center; padding: 40px; color: #64748b;">لا توجد صورة متاحة</p>
                    <?php endif; ?>
                </div>

                <div class="recipeText">
                    <h3><span><?= htmlspecialchars($favouriteItem['name']) ?></span></h3>
                    <p class="content">
                        <?= nl2br(htmlspecialchars($favouriteItem['recipe'])) ?>
                    </p>
                </div>

                <form method="post" action="insertFavourite.php" class="fav-form">
                    <input type="hidden" name="id" value="<?= $favouriteItem['id'] ?>">
                    <button type="submit" class="fav-btn" title="Add to Favourites">
                        <i class="fa-solid fa-heart heart"></i>
                    </button>
                </form>
            </section>
        <?php else: ?>
            <div style="text-align: center; padding: 50px;">
                <h3 style="color: #ef4444; margin-bottom: 15px;">لم يتم العثور على هذه الوصفة!</h3>
                <a href="recipeApp.php" style="color: #ff6b35; text-decoration: underline;">العودة للصفحة الرئيسية</a>
            </div>
        <?php endif; ?>
    </main>

    <script src="js/script.js"></script>
</body>

</html>