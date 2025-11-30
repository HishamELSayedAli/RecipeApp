<?php
include 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$recipe=$_POST['recipe'];
$iamge=$_POST['iamge'];
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $query=$conn->prepare("INSERT INTO favourites SET name='$name', recipe='$recipe', iamge='$iamge', re_id=$id 
    ");
    $query->execute();
    $favourite=$query->fetchAll();
    header('location:recipeApp.php');
}else{
    header('location:recipeApp.php');
}



?>
