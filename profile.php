<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>

<body class="bg-purple">
    <nav class="flex">
        <h2>Aplikasi pengelolaan Keungaan</h2>
        <div class="flex">
            <a href="home.php">Home</a>
            <a class="current" href="profile.php">Profile</a>
            <a class="logout" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="flex flex-column flex-center message-container">
        <h1>Profil pribadi</h1>
        <div class="profile-parent-container">
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
                <div class="profile-field-container">
                    <span>
                        <?= "$value" ?>
                    </span>
                    <span>
                        <?= "$_SESSION[$key]" ?>
                    </span>
                </div>
            <?php endforeach ?>
            <div class="profile-field-container">
                <span>
                    Foto Profil
                </span>
                <img class="pict" src="<?= "$profilePict" ?>" alt="">
            </div>
        </div>
    </div>
</body>

</html>