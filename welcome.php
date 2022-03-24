<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 3rem;
            background: #E5EDEB;
            text-align: center;
        }

        .container {
            margin: 5rem;
        }

        .btn-container {
            margin: 3rem;
            display: flex;
            gap: 3rem;
            justify-content: center;
        }

        .btn {
            padding: 1em;
            font-size: 2rem;
            border: none;
            cursor: pointer;
        }

        .login-btn {
            background: #99D6ED;
        }

        .register-btn {
            background: #C6ED99;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <h2>Aplikasi pengelolaan Keungaan</h2>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
        <div class="btn-container">
            <a href="login.php">
                <button id="login" class="btn login-btn">
                    Login
                </button>
            </a>
            <a href="register.php">
                <button id="login" class="btn register-btn">
                    Register
                </button>
            </a>
        </div>
    </div>
</body>


</html>