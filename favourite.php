<?php 
include 'connect.php';
$query=$conn->prepare("SELECT * FROM favourites");
$query->execute();
$favourite=$query->fetchAll();
