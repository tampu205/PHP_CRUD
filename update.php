<?php

//include 'home.php';
$con = mysqli_connect('localhost','root','','sessionpractical');
if(isset($_POST['done'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $q = "UPDATE `signup` SET `id`=$id,`name`=$name,`password`=$password WHERE id=$id";

    $query = mysqli_query($con,$q);

    header('location:home.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- JS location 2s -->
</head>

<body>
    <div class="container">
        <div class="login-box"> </div>
        <div class="row">
            <div class="col-lg-6 login-left">
                <h2>Update Form</h2>
                <form action="update.php" method="post">

                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </form>
            </div>
            
    </div>
    <!-- js location #1 -->
    <!-- Check login_invalid session variable =1 or =0 using php or javascript -->
    <!-- Refer to: https://stackoverflow.com/questions/41391862/how-to-access-php-session-variable-in-javascript -->
</body>

</html>