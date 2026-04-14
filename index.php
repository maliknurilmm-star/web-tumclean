<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$user'");
    $d = mysqli_fetch_assoc($data);

    if ($d && password_verify($pass, $d['password'])) {
        $_SESSION['username'] = $d['username'];
        $_SESSION['foto'] = $d['foto'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
body {
    margin:0;
    font-family:Arial;
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
    width:300px;
    text-align:center;
    color:white;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 25px #00f7ff;
    animation: glow 2s infinite alternate;
}

@keyframes glow {
    from { box-shadow: 0 0 10px #00f7ff; }
    to { box-shadow: 0 0 25px #00f7ff, 0 0 40px #00f7ff; }
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
    background:#00f7ff;
    font-weight:bold;
    cursor:pointer;
}

a {
    color:#00f7ff;
}

/* MODE HP */
@media (max-width: 768px) {

    .navbar {
        flex-direction: column;
        text-align: center;
    }

    .menu {
        margin-top: 10px;
    }

    .slider {
        height: 200px;
    }

    .text-center {
        font-size: 16px;
    }

    .card {
        flex-direction: column;
        text-align: center;
    }

    .card img {
        width: 100%;
        margin-bottom: 10px;
    }

    .info {
        flex-direction: column;
    }

    .info div {
        width: 100%;
    }

    .topbar {
        font-size: 12px;
        padding: 8px;
    }
}

</style>
</head>

<body>

<div class="box">
<h2>Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Masuk</button>
</form>

<p>Belum punya akun? <a href="registrasi.php">Daftar</a></p>

</div>

</body>
</html>