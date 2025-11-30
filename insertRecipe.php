<?php
include 'connect.php';
$name=$_POST['name'];
$recipe=$_POST['recipe'];
$iamge=$_POST['iamge'];
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $countfiles = count($_FILES['files']['name']);
    $query=$conn->prepare("INSERT INTO recipes SET name='$name', recipe='$recipe',
     iamge='$iamge'");
    $query->execute();
    $recipe=$query->fetchAll();
    header('location:recipeApp.php');
}else{
}
