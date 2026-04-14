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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<style>
body {
    margin:0;
    font-family: Arial;
}

/* TOP BAR */
.topbar {
    background:#0d6efd;
    color:white;
    padding:10px;
    text-align:center;
    font-weight:bold;
}

/* NAVBAR */
.navbar {
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px;
    background:#111;
    color:white;
}

.menu a {
    color:white;
    margin:0 10px;
    text-decoration:none;
}

/* SLIDER */
.slider {
    position:relative;
    height:300px;
    overflow:hidden;
}

.slide {
    position:absolute;
    width:100%;
    height:100%;
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    opacity:0;
    transition:1s;
}

.slide:hover {
    filter: none;
}

.arrow {
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    font-size:30px;
    color:white;
    background:rgba(0,0,0,0.5);
    padding:10px;
    cursor:pointer;
}

.left { left:10px; }
.right { right:10px; }

.text-center {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    color:white;
    font-size:20px;
}

/* LAYANAN */
.section {
    padding:30px;
}

.card {
    display:flex;
    background:#f4f4f4;
    margin:20px 0;
    padding:20px;
    border-radius:10px;
}

.card img {
    width:150px;
    border-radius:10px;
    margin-right:20px;
}

/* PENJELASAN */
.info {
    display:flex;
    gap:20px;
}

.info div {
    width:50%;
}

/* FOOTER */
.footer {
    text-align:center;
    padding:20px;
    background:#111;
    color:white;
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

<!-- TOP -->
<div class="topbar">
    📞 +62 822-9929-4901 | ✉️ nsservice21@gmail.com
</div>

<!-- NAVBAR -->
<div class="navbar">
    <h2>PT. Tunggal Utama Makmur</h2>
    <div class="menu">
        <a href="home.php">Home</a>
        <a href="layanan.php">Layanan</a>
        <a href="kontak.php">Kontak</a>
    </div>
</div>

<!-- SLIDER -->
<div class="slider">
    <div class="slide" style="background-image:url('dp1.jpg');"></div>
    <div class="slide" style="background-image:url('dp3.jpg');"></div>
    <div class="arrow left" onclick="prev()"><</div>
    <div class="arrow right" onclick="next()">></div>
</div>

<!-- LAYANAN -->
<div class="section">
    <h2>Layanan Kami</h2>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952">
        <div>
            <h3>Cleaning Rumah</h3>
            <p>mencakup segala aktivitas yang bertujuan menjaga kebersihan dan kerapian lingkungan rumah, baik di dalam maupun di luar ruangan. Selain aspek estetika, cleaning rumah juga penting untuk mencegah penyebaran kuman, alergi, serta menjaga kesehatan tubuh penghuni. Kegiatan ini bisa dilakukan secara harian, mingguan, atau bulanan tergantung intensitas dan area yang dibersihkan.</p>
            <b>Harga: Rp100.000</b>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
        <div>
            <h3>Cleaning Kantor</h3>
            <p>layanan yang dirancang untuk membersihkan seluruh area kantor, dari rutin harian, mingguan, atau bulanan, hingga deep cleaning yang menangani area sulit dijangkau. Layanan ini memastikan kantor tetap bersih, higienis, nyaman, dan produktif bagi karyawan</p>
            <b>Harga: Rp250.000</b>
        </div>
    </div>
</div>

<!-- PENJELASAN -->
<div class="section info">
    <div>
        <h3>Cleaning Service</h3>
        <p>
        Cleaning service adalah layanan jasa kebersihan yang membantu menjaga kebersihan rumah, kantor, dan tempat lainnya.
        </p>

        <h3>Mengapa Harus Outsourcing?</h3>
        <p>
        Outsourcing membantu menghemat biaya, tenaga, dan waktu karena pekerjaan dilakukan oleh tenaga profesional.
        </p>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    © 2026 Cleaning Service
</div>

<script>
let index = 0;
let slides = document.querySelectorAll('.slide');

function showSlide(i) {
    slides.forEach((s, idx) => {
        s.style.opacity = (idx === i) ? '1' : '0';
    });
}

function next() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prev() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

showSlide(index);
</script>

</body>
</html>
