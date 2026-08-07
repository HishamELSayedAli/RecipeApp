<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? '';

    $stmt = $conn->prepare("
        INSERT INTO favourites (re_id)
        VALUES (:re_id)
    ");

    $stmt->execute([
        ':re_id' => $id
    ]);

    header('Location: recipeApp.php');
    exit();

} else {

    header('Location: recipeApp.php');
    exit();

}
?>