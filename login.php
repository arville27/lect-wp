<?php

require_once 'utility/utils.php';
require_once 'utility/db.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['username'])) {
    header('location: home.php');
} else if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username)) {
        invoke_js(["alert('Please enter your username')"]);
    } else if (empty($password)) {
        invoke_js(["alert('Password is must not empty')"]);
    } else {
        $user = get_user($username);
        if (!$user) invoke_js(["alert('This user doesn\'t exists')"]);
        else if ($user['password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['full_name'] = implode(' ', [$user['front_name'], $user['middle_name'], $user['last_name']]);
            header('location: home.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="bg-yellow text-center">
    <h2 class="title">Login</h2>
    <div class="flex flex-column flex-center">
        <form class="form-element bg-blue-100" action="" method="post">
            <div class="flex flex-column flex-center login-container">
                <div class="flex">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="flex">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <div class="flex flex-center login-btn-container">
                <a href="login.php">
                    <input type="submit" value="Login" name="login" class="btn userlogin-btn">
                </a>
                <a href="welcome.php">
                    <input type="button" value="Kembali" class="btn back-btn">
                </a>
            </div>
        </form>
    </div>
</body>

</html>