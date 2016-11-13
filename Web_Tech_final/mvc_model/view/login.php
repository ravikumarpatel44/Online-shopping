<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../dashboard/assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dashboard/assets/css/font-awesome.min.css">
</head>

<body style="background-color: blanchedalmond">
<?php
include_once "../model/auth.php";
?>
<div class="login-logo" style="text-align: center; ">
    <img src="../image/logo.jpg">
</div>
<div class="form-content">
    <div class="form">
        <h2 style="text-align: center">Login</h2>
        <?php
        if (isset($_GET['errors']) == true) {
            $errors = $_GET['errors'];
            ?>
            <p class="errors">
                <?php
                print_r($errors);
                ?>
            </p>
            <?php
        }
        ?>
        <form action="../controller/auth.php" method="post">
            <div style="text-align: center">
            Username: <input type="text" placeholder="Username" id="username" name="username"/></br></br>
            Password: <input type="password" placeholder="Password" id="password" name="password"/></br>
            <button type="submit" name="login"><i class="fa fa-sign-in"></i> Login</button></br></br>
            </div>
        </form>
        <div class="cta" style="text-align: center" ><a href="forgot_password.php"><i class="fa fa-info-circle"></i> Forgot your password?</a></div>
    </div>
</div>
<script src='../dashboard/assets/js/jquery-3.1.1.min.js'></script>
<script src='../dashboard/assets/js/bootstrap.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>
