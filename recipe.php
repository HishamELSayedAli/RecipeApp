<?php
include"connect.php";
$query=$conn->prepare("SELECT * FROM recipes");
$query->execute();
$recipes=$query->fetchAll();