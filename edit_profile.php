<?php

require_once 'utility/utils.php';
require_once 'utility/db.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['username'])) {
    header('location: home.php');
} else if (!isset($_SESSION['username'])) {
    header('location: welcome.php');
} else if (isset($_POST['save'])) {
    $user = get_user($_SESSION['username']);

    // Handle image upload
    if ($_FILES['profile_pict']['error'] === 0) {
        $temp = $_FILES['profile_pict']['tmp_name'];
        $path = $user['profile_pict'];
        if (!is_dir('profile_pict')) mkdir('profile_pict');
        move_uploaded_file($temp, $path);
    }

    $status = update_user($_POST, $user['id']);
    if ($status) {
        $_SESSION['full_name'] = implode(' ', [$_POST['front_name'], $_POST['middle_name'], $_POST['last_name']]);
        invoke_js(["alert('Edit success')", "location.href = 'profile.php'"]);
    } else {
        invoke_js(["alert('Edit failed')"]);
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
        <h1>Edit profil</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="profile-parent-container">
                <div class="profile-field-container">
                    <label for="front_name">Nama depan</label>
                    <input type="text" name="front_name" id="front_name" value="<?= $user['front_name'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="middle_name">Nama tengah</label>
                    <input type="text" name="middle_name" id="middle_name" value="<?= $user['middle_name'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="last_name">Nama belakang</label>
                    <input type="text" name="last_name" id="last_name" value="<?= $user['last_name'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="birth_place">Tempat lahir</label>
                    <input type="text" name="birth_place" id="birth_place" value="<?= $user['birth_place'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="birth_date">Tanggal lahir</label>
                    <input type="text" name="birth_date" id="birth_date" value="<?= $user['birth_date'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="NIK">NIK</label>
                    <input type="text" name="NIK" id="NIK" value="<?= $user['NIK'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="nationality">Warga Negara</label>
                    <input type="text" name="nationality" id="nationality" value="<?= $user['nationality'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?= $user['email'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="phone_number">No HP</label>
                    <input type="text" name="phone_number" id="phone_number" value="<?= $user['phone_number'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="address">Alamat</label>
                    <textarea name="address" cols="21" rows="2" id="address"><?= $user['address'] ?></textarea>
                </div>
                <div class="profile-field-container">
                    <label for="postal_code">Kode Pos</label>
                    <input type="text" name="postal_code" id="postal_code" value="<?= $user['postal_code'] ?>">
                </div>
                <div class="profile-field-container">
                    <label for="profile_pict">Foto Profile</label>
                    <input type="file" name="profile_pict" id="profile_pict">
                </div>
            </div>
            <div class="flex flex-center">
                <a href="profile.php" class="cancel-btn">
                    <input type="button" value="Cancel" class="btn cancel-btn">
                </a>
                <input type="submit" value="Save" name="save" class="btn save-btn">
            </div>
        </form>
    </div>
</body>

</html>