<?php

require_once 'utility/utils.php';
require_once 'utility/db.php';

if (isset($_POST['register'])) {
    $missing_fields = validate_regist_data([...$_POST, ...$_FILES]);
    if (!empty($missing_fields)) {
        $message = implode('\n', $missing_fields);
        invoke_js(["alert('$message')"]);
    } else {
        // Handle image upload
        $temp = $_FILES['profile_pict']['tmp_name'];
        $name = $_FILES['profile_pict']['name'];
        if (!is_dir('profile_pict')) mkdir('profile_pict');
        move_uploaded_file($temp, "profile_pict/$name");

        $status = insert_user([...$_POST, "profile_pict" => "profile_pict/$name"]);
        if ($status) {
            invoke_js(["alert('Register success')", "location.href = 'welcome.php'"]);
        } else {
            invoke_js(["alert('Register failed')"]);
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
    <title>Register</title>
</head>

<body class="bg-blue-100 text-center">
    <h1 class="title">Register</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="flex flex-column form-container">
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="front_name">Nama depan</label>
                    <input type="text" name="front_name" id="front_name">
                </div>
                <div class="flex input-container">
                    <label for="middle_name">Nama tengah</label>
                    <input type="text" name="middle_name" id="middle_name">
                </div>
                <div class="flex input-container">
                    <label for="last_name">Nama belakang</label>
                    <input type="text" name="last_name" id="last_name">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="birth_place">Tempat Lahir</label>
                    <input type="text" name="birth_place" id="birth_place">
                </div>
                <div class="flex input-container">
                    <label for="birth_date">Tanggal lahir</label>
                    <input type="date" name="birth_date" id="birth_date">
                </div>
                <div class="flex input-container">
                    <label for="NIK">NIK</label>
                    <input type="number" name="NIK" id="NIK">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="nationality">Warga Negara</label>
                    <input type="text" name="nationality" id="nationality">
                </div>
                <div class="flex input-container">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex input-container">
                    <label for="phone_number">No HP</label>
                    <input type="phone" name="phone_number" id="phone_number">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="address">Alamat</label>
                    <textarea name="address" cols="21" rows="2" id="address"></textarea>
                </div>
                <div class="flex input-container">
                    <label for="postal_code">Kode Pos</label>
                    <input type="number" name="postal_code" id="postal_code">
                </div>
                <div class="flex input-container">
                    <label for="profile_pict">Foto Profil</label>
                    <input type="file" name="profile_pict" id="profile_pict">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="flex input-container">
                    <label for="password-1">Password 1</label>
                    <input type="password" name="password-1" id="password-1">
                </div>
                <div class="flex input-container">
                    <label for="password-2">Password 2</label>
                    <input type="password" name="password-2" id="password-2">
                </div>
            </div>
        </div>
        <div class="flex flex-center register-btn-container">
            <a href="welcome.php">
                <input class="btn back-btn" type="button" value="Kembali">
            </a>
            <input class="btn submit-btn" type="submit" name="register" value="Register">
        </div>
    </form>
</body>

</html>