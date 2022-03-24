
<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password-1'];
if ($username === $_POST['username'] && $password === $_POST['password']) {
    header('location: home.php');
} else {
    header('location: login.php');
}
?>