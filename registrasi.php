<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users (username, password) 
    VALUES ('$user','$pass')");

    echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body {
    margin:0;
    font-family: Arial;
    height:100vh;
    background: url('dp1.jpg') no-repeat center;
    background-size:cover;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box {
    background: rgba(0,0,0,0.7);
    padding:30px;
    border-radius:15px;
    color:white;
    width:320px;
    backdrop-filter: blur(12px);
    box-shadow: 0 0 20px cyan;
    text-align:center;
}

input {
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:8px;
    border:none;
}

button {
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    background:cyan;
    color:black;
    font-weight:bold;
    cursor:pointer;
    box-shadow:0 0 10px cyan;
}
</style>
</head>

<body>

<div class="box">
<h2>Daftar Akun</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button name="register">Daftar</button>
</form>

</div>

</body>
</html>