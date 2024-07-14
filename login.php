<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM ABSENSI SISWA</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-container">
                    <img src="gambar/logo.jpg" alt="logo" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="vision-mission">
                    <h1>YAYASAN ASHAABUL ARDHI (SAHABAT BUMI)</h1>
                    <h2>Visi</h2>
                    <p>Menjadi lebih baik dan terbaik dengan menerapkan IMTAQ dan IPTEK, Santun sesuai dengan Al-Qur'an dan Sunnah.</p>
                    <h2>Misi</h2>
                    <p>- Mendekatkan generasi muda dengan Al-Qur'an dan Sunnah</p>
                    <p>- Membentuk karakter generasi muda dengan iman dan taqwa sebagai pondasi dasar</p>
                    <p>- Memberikan ilmu pengetahuan dan teknologi informasi</p>
                    <p>- Membentuk generasi muda dengan akhlaqul karimah sesuai dengan landasan Al-Qur'an dan Sunnah</p>
                    <a href="https://drive.google.com/file/d/1DVQHRRzH4pa_RW-VhwvaFBb2wWIcugmp/view?usp=drivesdk" download="Compro Yayasan Ashaabulardhi" class="btn btn-info mt-2">KLIK DETAIL COMPANY PROFILE YAYASAN ASHAABUL ARDHI (SAHABAT BUMI)</a><br><br>
                    <h4>Ingin Melakukan Donasi ??</h4>
                    <a href="https://drive.google.com/file/d/18Rd98uhJp7DueslWCZb6xVNvhgEzTtB8/view?usp=drive_link" download="BARCODE DONASI" class="btn btn-warning mt-2">KLIK UNTUK MENAMPILKAN BARCODE DONASI</a>
                </div>
            </div>
        </div>
        <br><br><br>
        <!-- ----------------------------- -->
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php
                include 'config/conn.php';
                $sql = mysqli_query($koneksi, "select * from sekolah where id='2'");
                $rs = mysqli_fetch_array($sql);
                ?>
                <marquee><h2>Halaman Login Absensi <?php echo $rs['nama']; ?>, Silahkan Admin/Guru/Siswa Login dibawah ini.</h2></marquee>
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="ceklog.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
