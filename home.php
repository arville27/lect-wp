<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: welcome.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body class="bg-purple">
    <nav class="flex">
        <h2>Aplikasi pengelolaan Keungaan</h2>
        <div class="flex">
            <a class="current" href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="flex flex-center message-container">
        <?php
        session_start();
        $name = $_SESSION['full_name'];
        echo "<span> Halo <strong>$name</strong>, Selamat datang di Aplikasi Pengelolaan Keuangaan </span>"
        ?>
    </div>
</body>

</html>