session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Layanan</title>

<style>

    /* NAVBAR ATAS KANAN */
.navbar {
    position: absolute;
    top: 20px;
    right: 40px;
    z-index: 3;
}

.navbar a {
    color: black;
    margin-left: 20px;
    text-decoration: none;
    font-weight: bold;
    background: white   ;
    padding: 8px 15px;
    border-radius: 8px;
    transition: 0.3s;
}

.navbar a:hover {
    background: #ffffff;
    color: white;
}

body {
    margin:0;
    font-family: Arial;
    background:#f5f7fa;
}

/* HEADER */
.header {
    padding:50px;
}

.header h1 {
    color:#2c7be5;
    font-size:40px;
}

.header p {
    color:#555;
    max-width:600px;
}

/* LAYANAN */
.layanan {
    padding:30px;
}

.box {
    display:flex;
    align-items:center;
    margin-bottom:50px;
}

.text-gradient {
    width:50%;
    padding:40px;
    background: linear-gradient(135deg, #4e73df, #36b9cc);
    color:white;
    border-radius:10px 0 0 10px;
}

.text-normal {
    width:50%;
    padding:40px;
    background:#eee;
    border-radius:0 10px 10px 0;
}

.image {
    width:50%;
    height:300px;
    overflow:hidden;
}

.image img {
    width:100%;
    height:100%;
    object-fit:cover;
}

.btn {
    display:inline-block;
    margin-top:15px;
    padding:10px 20px;
    background:#ff6b3d;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.reverse {
    flex-direction: row-reverse;
}

/* 🔥 GALERI */
.galeri {
    padding:50px;
    background:#f0f2f5;
    text-align:center;
}

.galeri h2 {
    margin-bottom:30px;
}

.galeri-grid {
    display:grid;
    grid-template-columns: repeat(4, 1fr);
    gap:20px;
}

.galeri-grid img {
    width:100%;
    height:200px;
    object-fit: contain; /* foto full kelihatan */
    background:#fff;
    padding:10px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* FITUR */
.fitur {
    display:flex;
    justify-content:space-around;
    text-align:center;
    padding:50px;
    background:#fff;
}

.fitur-box {
    width:30%;
}

.fitur-box img {
    width:60px;
}

/* FOOTER */
.footer {
    background:#2c7be5;
    color:white;
    padding:40px;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}

.footer div {
    width:30%;
}

.social img {
    width:30px;
    margin-right:10px;
}

/* RESPONSIVE */
@media (max-width:768px){
    .box, .fitur {
        flex-direction:column;
    }

    .text-gradient, .text-normal, .image {
        width:100%;
        border-radius:10px;
    }

    .galeri-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .footer {
        flex-direction:column;
    }

    .footer div {
        width:100%;
        margin-bottom:20px;
    }
}

/* HEADER BACKGROUND */
.header {
    position: relative;
    height: 400px;
    background: url('photo8.jpg') no-repeat center/cover;
    display: flex;
    align-items: center;
    padding: 50px;
    color: white;
}

/* OVERLAY BLUR KIRI */
.overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 50%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(8px);
}

/* ISI TEXT */
.header-content {
    position: relative;
    z-index: 2;
    max-width: 500px;
}
</style>
</head>

<body>

<div class="header">

    <!-- NAVBAR -->
    <div class="navbar">
    <a href="home.php">Home</a>
    <a href="layanan.php">Layanan</a>
    <a href="kontak.php">Kontak</a>
    <a href="logout.php" class="logout">Logout</a>
</div>
        <a href="home.php">Home</a>
        <a href="layanan.php">Layanan</a>
        <a href="kontak.php">Kontak</a>
    </div>

    <div class="overlay"></div>

    <div class="header-content">
        <h1>General Cleaning</h1>
        <p style="color: #eee;">
        General Cleaning adalah pembersihan yang lebih detail dari pembersihan harian.
        Biarkan kami membantu pekerjaan Anda agar lebih ringan dan efisien.
        </p>
        <a href="kontak.php" class="btn">Hubungi Kami Sekarang</a>
    </div>
</div>

<div class="layanan">

    <div class="box">
        <div class="text-gradient">
            <h2>Residential Services</h2>
            <p>pekerjaan housekeeping harian yang biasa dilakukan sehari hari, seperti merapikan tempat tidur, membersihkan dari debu, menyapu atau mem-vakum, mengepel serta membersihkan kamar mandi, membuang sampah dan mencuci piring dalam jumlah wajar harian. Daily Cleaning sebaiknya dilakukan secara regular, sehingga kebersihan dan kerapihan selalu terjaga</p>
        </div>
        <div class="image">
            <img src="photo3.jpg">
        </div>
    </div>

    <div class="box reverse">
        <div class="image">
            <img src="photo4.jpg">
        </div>
        <div class="text-normal">
            <h2>Commercial Services</h2>
            <p>Selain tugas-tugas rutin ini, layanan kebersihan hotel juga dapat mencakup permintaan khusus tamu, seperti menyediakan bantal tambahan, perbaikan kecil di kamar, atau membersihkan noda atau kerusakan yang terjadi selama menginap.

Berikut adalah beberapa aspek utama dari layanan kebersihan di hotel:

Pembersihan Kamar
Pelayanan Laundry
Pembersihan Area Publik
Pengelolaan Sampah
Penyediaan Amenitas
Staf kebersihan hotel juga bertanggung jawab untuk menyediakan amenitas tambahan di kamar seperti air minum, teh atau kopi, perlengkapan mandi, dan perlengkapan lainnya sesuai dengan kebutuhan tamu.</p>
        </div>
    </div>

</div>

<!-- 🔥 GALERI FOTO -->
<div class="galeri">
    <h2>Galeri Pekerjaan</h2>

    <div class="galeri-grid">
        <img src="photo1.jpg">
        <img src="photo9.jpg">
        <img src="photo3.jpg">
        <img src="photo4.jpg">
        <img src="photo5.jpg">
        <img src="photo6.jpg">
        <img src="photo7.jpg">
        <img src="photo8.jpg">
    </div>
</div>

<!-- FITUR -->
<div class="fitur">

    <div class="fitur-box">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png">
        <h3>Hubungi kami via WA/Call</h3>
        <p>Untuk layanan jasa kebersihan dapat diakses melalui Whatsapp atau telepon langsung</p>
    </div>

    <div class="fitur-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png">
        <h3>Waktu Pengerjaan Flexible</h3>
        <p>Layanan dan waktu kerja disesuaikan dengan kebutuhan Anda</p>
    </div>

    <div class="fitur-box">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png">
        <h3>Harga Sesuai Kebutuhan</h3>
        <p>Harga layanan fleksibel sesuai kebutuhan pelanggan</p>
    </div>

</div>


<!-- FOOTER -->
<div class="footer">

    <div>
        <h4>PT. Tunggal Utama Makmur</h4>
        <p>
        Darmawanpark II, Babakan<br>
        Madang No.99 Sentul<br>
        Bogor
        </p>
    </div>

    <div>
        <h4>Support</h4>
        <p>Ayi Suhendar : 0822-9929-4902</p>
        <p>Dian Priyatna : 0822-9929-4901</p>
        <p>Dadan Suryadi : 0896-3481-3327</p>
    </div>

    <div>
        <h4>Social Media</h4>
        <div class="social">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733646.png">
        </div>
    </div>

</div>

</body>
</html>