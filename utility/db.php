<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'aplikasi_pengelolaan_uang';

$conn = new mysqli($hostname, $user, $password, $database);
if (!$conn) die(1);

function insert_user($user) {
    global $conn;

    $username = strtolower($user['username']);
    $statement = $conn->prepare("INSERT INTO users VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param(
        'ssssssssssssss',
        $user['frontName'],
        $user['middleName'],
        $user['lastName'],
        $user['birthLocation'],
        $user['birthDate'],
        $user['nik'],
        $user['wargaNegara'],
        $user['email'],
        $user['phone'],
        $user['address'],
        $user['postalCode'],
        $username,
        $user['password-1'],
        $user['profilePict'],
    );
    $status = $statement->execute();
    $statement->close();
    return $status;
}

function get_user($username = '') {
    global $conn;

    if (empty($username)) {
        $res = $conn->query('SELECT * FROM users');
    } else {
        $username = strtolower($username);
        $statement = $conn->prepare('SELECT * FROM users WHERE username = ?');
        $statement->bind_param('s', $username);
        $statement->execute();
        $res = $statement->get_result();
        $statement->close();
    }
    $rows = $res->fetch_assoc();
    return $rows;
}
