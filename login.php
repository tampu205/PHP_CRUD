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
                <h2>Login Form</h2>
                <form action="validation.php" method="post">

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
                    <button type="submit" class="btn btn-primary"> Login </button>

                </form>
            </div>

            <div class="col-lg-6 signup-right">
                <h2>Signup Form</h2>
                <form action="registration.php" method="post">

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
                    <button type="submit" class="btn btn-primary"> Sign Up </button>

                </form>
            </div>
        </div>
    </div>
    <!-- js location #1 -->
    <!-- Check login_invalid session variable =1 or =0 using php or javascript -->
    <!-- Refer to: https://stackoverflow.com/questions/41391862/how-to-access-php-session-variable-in-javascript -->
</body>

</html>