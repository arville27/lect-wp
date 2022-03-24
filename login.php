<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background: #FBFDAC;
            text-align: center;
        }

        input,
        textarea {
            border: none;
            resize: none;
        }

        .container {
            margin: 5rem 20rem;
            background: #ACE6FD;
            padding: 2rem;
        }

        .form-container {
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
        }

        .input-container {
            display: flex;
            gap: 2rem;
        }

        .input-container label {
            font-size: 1.5rem;
        }

        .btn-container {
            display: flex;
            gap: 3rem;
            justify-content: center;
            padding: 1.5rem;
        }

        .btn {
            padding: 0.5em 2em;
            font-size: 1.2rem;
            border: none;
            cursor: pointer;
        }

        .login-btn {
            background: #C6ED99;
        }

        .back-btn {
            background: #FDD7AC;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <h2>Login</h2>
    <div class="container">
        <form action="processLogin.php" method="post">
            <div class="form-container">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="btn-container">
                <a href="login.php">
                    <input type="submit" value="Login" class="btn login-btn">
                </a>
                <a href="welcome.php">
                    <input type="button" value="Kembali" class="btn back-btn">
                </a>
            </div>
        </form>
    </div>
</body>

</html>