<?php
include("./function.php");
$obj = new Log_Reg_system();

if (isset($_POST["submit"])) {
    $r = $obj->admin_login($_POST);
}

session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];

    if ($id) {
        header("location: dashboard.php");
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="icon" href="icon.png" type="image/gif">
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a>.</p>
        </form>
    </div>
</body>

</html>