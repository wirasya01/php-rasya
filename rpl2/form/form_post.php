<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form metode post</title>
</head>
<body>
<form method="POST">
    <div>
        <label>Email</label> <br>
        <input name="email" type="email" placeholder="Masukkan email">
    </div>
    <div>
        <label>Kata Sandi</label> <br>
        <input name="password" type="password" placeholder="Masukkan kata sandi">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>

<?php

$email = @$_POST['email'];
$password = @$_POST['password'];

if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($password) {
    echo "<strong>Kata Sandi:</strong> {$password} <br>";
}
?>
</body>
</html>