<?php
if (isset($_GET['id'])){
$id=$_GET['id'];
include 'connect.php';
$query=$conn->prepare("DELETE FROM favourites WHERE id='$id'");
$query->execute();
$favourite=$query->fetchAll();
header('location:recipeApp.php');
}else{
    header('location:recipeApp.php');

}