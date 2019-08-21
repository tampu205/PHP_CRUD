<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2 class="text-center text-seuccess"> Welcome <?php echo $_SESSION['username']; ?> </h2>
    <div class="col-lg-12">
    <br><br>
        <h1 class="text-warning text-center" > Display Table Data  </h1>
        <table class="table table-striped table-hover table-bordered">
        <tr class="text-center">
                <th> <h3>Id</h3> </th>
                <th> <h3>Username</h3> </th>
                <th> <h3>Password</h3> </th>
                <th> <h3>Delete</h3> </th>
                <th> <h3>Update</h3> </th>
        </tr>

<?php

    // include 'login.php';
    $con = mysqli_connect('localhost','root','','sessionpractical');

    // $q = "select * from signup";
    $query = mysqli_query($con,"select * from signup");
    while ($res = mysqli_fetch_array($query)) {

    ?>
        <tr class="text-center">
        <td> <?php echo $res['id'];  ?> </td>
        <td> <?php echo $res['name'];  ?> </td>
        <td> <?php echo $res['password'];  ?> </td>
        <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
        <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
       
         </tr>
       <?php
    }
    ?>
            
                
        </table>
    </div>
</div>
<a href="logout.php"> <h3>Logout</h3> </a>   
</body>
</html>