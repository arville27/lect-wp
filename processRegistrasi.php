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

        .error-container {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .btn {
            margin-top: 2rem;
            padding: 0.5em 2em;
            border: 2px solid black;
            border-radius: 5px;
            width: 10%;
            align-self: center;
        }

        .back-btn {
            background: #FDD7AC;
        }
    </style>
</head>

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
    'username' => 'Username',
    'password-1' => 'Password 1',
    'password-2' => 'Password 2'
];

$missingFields = [];
foreach ($keys as $key => $val) {
    if ($_POST[$key] === '') {
        array_push($missingFields, "<span> $val is required </span>");
    } else {
        $_SESSION[$key] = $_POST[$key];
    }
}

if ($_SESSION['password-1'] !== $_SESSION['password-2']) {
    array_push($missingFields, "<span> Password 1 and password 2 must be the same </span>");
}

if ($_FILES['profilePict']['error'] === 0) {
    $temp = $_FILES['profilePict']['tmp_name'];
    $name = $_FILES['profilePict']['name'];
    $_SESSION['profilePict'] = "profilePict/$name";
    if (!is_dir('profilePict')) mkdir('profilePict');
    move_uploaded_file($temp, "profilePict/$name");
} else {
    array_push($missingFields, "<span> Profile picture is required </span>");
}

if (count($missingFields) === 0) header('location: welcome.php');
?>

<body>
    <div class="error-container">
        <h2> Missing fields </h2>
        <?php echo implode("\n", $missingFields) ?>
        <a href="register.php">
            <button class="btn back-btn">Kembali</button>
        </a>
    </div>
</body>

</html>