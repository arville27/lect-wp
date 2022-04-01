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
    <form action="processRegistrasi.php" method="post" enctype="multipart/form-data">
        <div class="flex flex-column form-container">
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="frontName">Nama depan</label>
                    <input type="text" name="frontName" id="frontName">
                </div>
                <div class="flex input-container">
                    <label for="middleName">Nama tengah</label>
                    <input type="text" name="middleName" id="middleName">
                </div>
                <div class="flex input-container">
                    <label for="lastName">Nama belakang</label>
                    <input type="text" name="lastName" id="lastName">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="birthLocation">Tempat Lahir</label>
                    <input type="text" name="birthLocation" id="birthLocation">
                </div>
                <div class="flex input-container">
                    <label for="birthDate">Tanggal lahir</label>
                    <input type="date" name="birthDate" id="birthDate">
                </div>
                <div class="flex input-container">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" id="nik">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="wargaNegara">Warga Negara</label>
                    <input type="text" name="wargaNegara" id="wargaNegara">
                </div>
                <div class="flex input-container">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex input-container">
                    <label for="phone">No HP</label>
                    <input type="phone" name="phone" id="phone">
                </div>
            </div>
            <div class="flex row-input-container">
                <div class="flex input-container">
                    <label for="address">Alamat</label>
                    <textarea name="address" cols="21" rows="2" id="address"></textarea>
                </div>
                <div class="flex input-container">
                    <label for="postalCode">Kode Pos</label>
                    <input type="number" name="postalCode" id="postalCode">
                </div>
                <div class="flex input-container">
                    <label for="profilePict">Foto Profil</label>
                    <input type="file" name="profilePict" id="profilePict">
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
        <div class="flex flex-center">
            <a href="welcome.php">
                <input class="btn back-btn" type="button" value="Kembali">
            </a>
            <input class="btn submit-btn" type="submit" name="register" value="Register">
        </div>
    </form>
</body>

</html>