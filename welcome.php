<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['username'])) {
    header('location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>

<body class="bg-gray">
    <div class="flex flex-column flex-center content-container">
        <h2 class="title">Aplikasi pengelolaan Keungaan</h2>
        <h1 class="title">Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
        <div class="flex flex-center">
            <a href="login.php">
                <button id="login" class="btn tologin-btn">
                    Login
                </button>
            </a>
            <a href="register.php">
                <button id="login" class="btn toregister-btn">
                    Register
                </button>
            </a>
        </div>
    </div>
</body>


</html>