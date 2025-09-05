<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <title>AA Airlines Admin Panel</title>

</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Admin Login </h2>
            <p>Login to access AA Airlines <br>Flights Panel</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
                    <fieldset>
                        <strong>Username:</strong><br>
                        <input type="text" name="username" placeholder="Enter your username" required><br><br>
                        <strong>Password:</strong><br>
                        <input type="password" name="password" placeholder="Enter your password" required><br><br>
                        <strong>User Type:</strong><br>
                        Administrator <input type='radio' name='user_type' value='Administrator' checked/>
                        <br>
                        <?php
                            if(isset($_GET['msg']) && $_GET['msg']=='failed')
                            {
                                echo "<br>
                                <strong style='color:red'>Invalid Username or Password</strong>
                                <br><br>";
                            }
                        ?>
                        <input type="submit" name="Login" value="Login">
                    </fieldset>
                    <br>
                </form>
            </div>

        </div>
    </div>
    </div>
</body>

</html>