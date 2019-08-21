<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signup where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q); 

$num = mysqli_num_rows($result);

if($num == 1){
    //clear login_invalid session variable
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else{
    //Set login_invalid session variable   
    header('location:login.php?');
    
}
?>