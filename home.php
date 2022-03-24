<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #CAD1FF;
        }

        nav {
            background: #F9FFCA;
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            font-size: 1.3rem;
        }

        .navmenu {
            display: flex;
            gap: 2rem;
        }

        .logout {
            margin-left: 5rem;
        }

        .container {
            display: flex;
            justify-content: center;
            padding-block: 10rem;
            font-size: 2rem;
        }

        .current {
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <nav>
        <h2>Aplikasi pengelolaan Keungaan</h2>
        <div class="navmenu">
            <a class="current" href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a class="logout" href="processLogout.php">Logout</a>
        </div>
    </nav>
    <div class="container">
        <?php
        session_start();
        $name = implode(' ', [$_SESSION['frontName'], $_SESSION['middleName'], $_SESSION['lastName']]);
        echo "<span> Halo <strong>$name</strong>, Selamat datang di Aplikasi Pengelolaan Keuangaan </span>"
        ?>
    </div>
</body>

</html>