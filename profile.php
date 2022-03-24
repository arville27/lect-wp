<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            align-items: center;
            flex-direction: column;
            padding-block: 10rem;
        }

        .profile-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            row-gap: 2rem;
            column-gap: 8rem;
            margin: 2rem 8rem;
            font-size: 1.3rem;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            gap: 5rem;
        }

        .input-container *:nth-child(2) {
            font-weight: bold;
        }

        .pict {
            width: 10rem;
            height: 10rem;
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
            <a href="home.php">Home</a>
            <a class="current" href="profile.php">Profile</a>
            <a class="logout" href="processLogout.php">Logout</a>
        </div>
    </nav>
    <div class="container">
        <h1>Profil pribadi</h1>
        <div class="profile-container">
            <?php
            session_start();
            $keys = [
                'frontName' => 'Nama depan',
                'middleName' => 'Nama tengah',
                'lastName' => 'Nama belakang',
                'birthLocation' => 'Tempat Lahir',
                'birthDate' => 'Tanggal lahir',
                'nik' => 'NIK',
                'wargaNegara' => 'Warga Negara',
                'email' => 'Email',
                'phone' => 'No HP',
                'address' => 'Alamat',
                'postalCode' => 'Kode Pos',
            ];
            $profilePict = $_SESSION['profilePict'];
            ?>
            <?php foreach ($keys as $key => $value) : ?>
                <div class="input-container">
                    <span>
                        <?php echo "$value" ?>
                    </span>
                    <span>
                        <?php echo "$_SESSION[$key]" ?>
                    </span>
                </div>
            <?php endforeach ?>
            <div class="input-container">
                <span>
                    Foto Profil
                </span>
                <img class="pict" src="<?php echo "$profilePict" ?>" alt="">
            </div>
        </div>
    </div>
</body>

</html>