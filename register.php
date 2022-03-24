<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        body {
            background: #C2F0F7;
            text-align: center;
        }

        input,
        textarea {
            border: none;
            resize: none;
        }

        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
            margin: 3rem 8rem;
            padding: 3rem 2rem;
        }

        .input-container {
            display: flex;
            flex: 0 1 25%;
            justify-content: space-between;
        }

        .btn-container {
            display: flex;
            justify-content: flex-end;
            gap: 2rem;
            margin-inline: 15rem;
        }

        .btn {
            padding: 0.5em 2em;
            border: 2px solid black;
            border-radius: 5px;
        }

        .submit-btn {
            background: #ADF59F;
        }

        .back-btn {
            background: #FDD7AC;
        }
    </style>
</head>

<body>
    <h1>Register</h1>
    <form action="processRegistrasi.php" method="post" enctype="multipart/form-data">
        <div class="form-container">
            <div class="input-container">
                <label for="frontName">Nama depan</label>
                <input type="text" name="frontName">
            </div>
            <div class="input-container">
                <label for="middleName">Nama tengah</label>
                <input type="text" name="middleName">
            </div>
            <div class="input-container">
                <label for="lastName">Nama belakang</label>
                <input type="text" name="lastName">
            </div>
            <div class="input-container">
                <label for="birthLocation">Tempat Lahir</label>
                <input type="text" name="birthLocation">
            </div>
            <div class="input-container">
                <label for="birthDate">Tanggal lahir</label>
                <input type="date" name="birthDate">
            </div>
            <div class="input-container">
                <label for="nik">NIK</label>
                <input type="number" name="nik">
            </div>
            <div class="input-container">
                <label for="wargaNegara">Warga Negara</label>
                <input type="text" name="wargaNegara">
            </div>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-container">
                <label for="phone">No HP</label>
                <input type="phone" name="phone">
            </div>
            <div class="input-container">
                <label for="address">Alamat</label>
                <textarea name="address" cols="21" rows="2"></textarea>
            </div>
            <div class="input-container">
                <label for="postalCode">Kode Pos</label>
                <input type="number" name="postalCode">
            </div>
            <div class="input-container">
                <label for="profilePict">Foto Profil</label>
                <input type="file" name="profilePict">
            </div>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-container">
                <label for="password-1">Password 1</label>
                <input type="password" name="password-1">
            </div>
            <div class="input-container">
                <label for="password-2">Password 2</label>
                <input type="password" name="password-2">
            </div>
        </div>
        <div class="btn-container">
            <a href="welcome.php">
                <input class="btn back-btn" type="button" value="Kembali">
            </a>
            <input class="btn submit-btn" type="submit" value="Register">
        </div>
    </form>
</body>

</html>