<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="bg-yellow text-center">
    <h2 class="title">Login</h2>
    <div class="flex flex-column flex-center">
        <form class="form-element bg-blue-100" action="processLogin.php" method="post">
            <div class="flex flex-column flex-center login-container">
                <div class="flex">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="flex">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <div class="flex flex-center login-btn-container">
                <a href="login.php">
                    <input type="submit" value="Login" class="btn userlogin-btn">
                </a>
                <a href="welcome.php">
                    <input type="button" value="Kembali" class="btn back-btn">
                </a>
            </div>
        </form>
    </div>
</body>

</html>