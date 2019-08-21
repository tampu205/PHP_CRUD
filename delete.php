<?php

include 'home.php';

$id = $_GET['id'];

$q = "DELETE FROM `signup` WHERE id = $id"  ;

mysqli_query($con,$q);

header('location:home.php');

?>