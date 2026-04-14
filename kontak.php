<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontak</title>

<style>
body {
    margin:0;
    font-family: Arial;
    background:#f5f7fa;
}

/* HEADER */
.header {
    position: relative;
    height: 300px;
    overflow: hidden;
    background: url('photo8.jpg') no-repeat center/cover;
    display: flex;
    align-items: center;
    padding: 30px;
    color: white;
}

/* NAVBAR */
.navbar {
    position: absolute;
    top: 20px;
    right: 40px;
    z-index: 3;
}

.navbar a {
    color: black;
    margin-left: 15px;
    text-decoration: none;
    font-weight: bold;
    background: white;
    padding: 8px 15px;
    border-radius: 8px;
    transition: 0.3s;
}

.navbar a:hover {
    background:#2c7be5;
    color:white;
}

/* LOGOUT */
.logout {
    background:red !important;
    color:white !important;
}

/* OVERLAY BLUR */
.overlay {
    position:absolute;
    left:0;
    top:0;
    width:50%;
    height:100%;
    background:rgba(0,0,0,0.5);
    backdrop-filter: blur(8px);
    z-index:1;
}

/* TEXT HEADER */
.header-content {
    position: relative;
    z-index: 2;
}

.header-content h1 {
    margin:0;
}

/* KONTAK */
.kontak {
    display:flex;
    gap:30px;
    padding:50px;
}

/* FORM */
.form-box {
    width:50%;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.form-box h2 {
    margin-bottom:20px;
}

.form-box input,
.form-box textarea {
    width:100%;
    padding:10px;
    margin-bottom:15px;
    border-radius:8px;
    border:1px solid #ccc;
}

.form-box button {
    width:100%;
    padding:12px;
    border:none;
    background:#2c7be5;
    color:white;
    border-radius:8px;
    cursor:pointer;
}

/* INFO */
.info-box {
    width:50%;
}

.info-item {
    background:white;
    padding:20px;
    margin-bottom:15px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* WA BUTTON */
.wa-btn {
    display:inline-block;
    margin-top:10px;
    padding:10px 15px;
    background:#25D366;
    color:white;
    text-decoration:none;
    border-radius:8px;
}

/* MAP */
iframe {
    width:100%;
    height:250px;
    border:0;
    border-radius:10px;
}

/* FOOTER */
.footer {
    background:#2c7be5;
    color:white;
    padding:30px;
    text-align:center;
}

/* RESPONSIVE */
@media (max-width:768px){
    .kontak {
        flex-direction:column;
        padding:20px;
    }

    .form-box, .info-box {
        width:100%;
    }
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">

    <!-- NAVBAR -->
    <div class="navbar">
        <a href="dashboard.php">Home</a>
        <a href="layanan.php">Layanan</a>
        <a href="kontak.php">Kontak</a>
        <a href="log-out.php" class="log-out" onclick="return confirm('Yakin mau logout?')">Logout</a>
    </div>

    <div class="overlay"></div>

    <div class="header-content">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu kebutuhan cleaning service Anda</p>
    </div>

</div>

<!-- KONTEN -->
<div class="kontak">

    <!-- FORM -->
    <div class="form-box">
        <h2>Kirim Pesan</h2>
        <form>
            <input type="text" placeholder="Nama Anda" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="No HP">
            <textarea rows="5" placeholder="Pesan"></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    <!-- INFO -->
    <div class="info-box">

        <div class="info-item">
            <h3>Alamat</h3>
            <p>Darmawanpark II, Babakan Madang, Bogor</p>
        </div>

        <div class="info-item">
            <h3>Telepon</h3>
            <p>+62 822-9929-4901</p>
            <a href="https://wa.me/6282299294901" class="wa-btn">Chat WhatsApp</a>
        </div>

        <div class="info-item">
            <h3>Email</h3>
            <p>nsservice21@gmail.com</p>
        </div>

        <div class="info-item">
            <h3>Lokasi</h3>
            <iframe src="https://maps.google.com/maps?q=bogor&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>

    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    © 2026 PT. Tunggal Utama Makmur
</div>

</body>
</html>