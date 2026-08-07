<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $recipe = $_POST['recipe'];

    $image = "";

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

        $folder = "uploads/";

        if(!is_dir($folder)){
            mkdir($folder);
        }

        $imageName = time() . "_" . $_FILES['file']['name'];

        $imagePath = $folder . $imageName;

        move_uploaded_file(
            $_FILES['file']['tmp_name'],
            $imagePath
        );

        $image = $imagePath;
    }


    $query = $conn->prepare(
        "INSERT INTO recipes (name, recipe, iamge)
         VALUES (?, ?, ?)"
    );


    $query->execute([
        $name,
        $recipe,
        $image
    ]);


    header('location:recipeApp.php');
    exit;

}

?>