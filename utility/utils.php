<?php

$keys = [
    'front_name' => 'Nama depan',
    'middle_name' => 'Nama tengah',
    'last_name' => 'Nama belakang',
    'birth_place' => 'Tempat Lahir',
    'birth_date' => 'Tanggal lahir',
    'NIK' => 'NIK',
    'nationality' => 'Warga Negara',
    'email' => 'Email',
    'phone_number' => 'No HP',
    'address' => 'Alamat',
    'postal_code' => 'Kode Pos',
    'username' => 'Username',
    'password-1' => 'Password 1',
    'password-2' => 'Password 2'
];

function validate_regist_data($data) {
    global $keys;

    $missing_fields = [];
    foreach ($keys as $key => $val) {
        if (empty($data[$key])) {
            array_push($missing_fields, "$val is required");
        }
    }

    $password1 = $data['password-1'];
    $password2 = $data['password-2'];
    if (!empty($password1) && $password1 !== $password2) {
        array_push($missing_fields, "Password 1 and password 2 must be the same");
    }

    if ($data['profile_pict']['error'] !== 0) {
        array_push($missing_fields, "Profile picture is required");
    }

    return $missing_fields;
}

function invoke_js($array_cmd) {
    $cmd = implode("\n", $array_cmd);
    echo "
    <script>
        $cmd
    </script>";
}
