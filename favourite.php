<?php

include 'connect.php';

$query = $conn->prepare("
    SELECT favourites.*, 
           recipes.name,
           recipes.recipe,
           recipes.iamge
    FROM favourites
    JOIN recipes
    ON favourites.re_id = recipes.id
");

$query->execute();

$favourite = $query->fetchAll(PDO::FETCH_ASSOC);

?>