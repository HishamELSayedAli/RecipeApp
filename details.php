<?php
include "favourite.php";
include "connect.php";

// 1. تحسين الأمان: استخدم الاستعلامات المجهزة (Prepared Statements) 
// هذا يحمي من هجمات حقن SQL
if (isset($_GET['id'])) {
    // جلب الـ ID
    $id = $_GET['id'];

    // إعداد الاستعلام
    $query = $conn->prepare("SELECT * FROM favourites WHERE id=?");

    // تنفيذ الاستعلام مع تمرير الـ ID كمعامل
    $query->execute([$id]);

    // جلب الوصفة
    $favourites = $query->fetch(PDO::FETCH_ASSOC); // استخدام FETCH_ASSOC لجعل المصفوفة واضحة

    // تحقق من وجود الوصفة
    if (!$favourites) {
        echo '<h3><span class="row">There is no recipe with this ID.</span></h3>';
        // يمكنك توجيه المستخدم لصفحة أخرى أو إنهاء التنفيذ هنا
        // exit(); 
    }
} else {
    // إذا لم يكن هناك ID في الرابط
    echo '<h3><span class="row">No recipe ID provided.</span></h3>';
    // exit(); 
}

// ملاحظة: المتغير $id معرف داخل الكتلة if، ولكن يجب تعريفه خارجها إذا أردت استخدامه لاحقًا.
// في حالتك، أنت تستخدم $favourites فقط في HTML، وهو معرف جيدًا هنا.

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
    <?php
    //* variable for image data
    $imageData = $favourites['iamge'];
    $imageType = 'png';

    ?>
    <!-- //! type image -->
    <!-- <?php
    var_dump(substr($imageData, 0, 20)); // يعرض أول 20 بايت

    ?> -->
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
            <?php

            ?>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($favourite as $key) { ?>
            <div class="card">
                <div>
                    <a class="xmark" href="deleteFavourite.php">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </div>
                <div class="favourite">
                    <a href="details.php?id=<?= $key['id'] ?>">
                        <h3>Details</h3>
                    </a>
                </div>
                <h3><?= $key['name'] ?></h3>
            </div>
        <?php } ?>
    </div>


    <section class="recipe">
        <?php
        // 2. التحقق من وجود بيانات الوصفة و الصورة قبل العرض
        if (isset($favourites) && !empty($favourites['iamge'])) {
        ?>
            <div class="recipe-img">
                <img class="img" width="100%" height="500vh"
                    src="data:image/jpeg;base64,<?= $imageData ?>"
                    alt="<?= htmlspecialchars($favourites['name']) ?>">
            </div>

        <?php
        } else {
            // إذا لم يتم العثور على صورة، يمكنك وضع صورة افتراضية (default)
        ?>
            <div class="recipe-img">
                <img class="img" width="100%" height="500vh" src="images/default_recipe.jpg" alt="No image available">
            </div>
        <?php
        }
        ?>
        <div class="recipeText">
            <?php if (isset($favourites)) { ?>
                <h3><span>Name: </span><?= $favourites['name'] ?></h3>
                <p class="content"><?= $favourites['recipe'] ?>
                </p>
            <?php } ?>
        </div>

    </section>

    <script src="js/script.js"></script>
</body>

</html>