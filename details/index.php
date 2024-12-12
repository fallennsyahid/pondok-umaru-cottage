<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pondok Umaru</title>
        <link rel="icon" type="image/x-icon" href="../assets/houser.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/list.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/button3.css">
    </head>
    <body>

<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'dbkosan');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID produk dari URL
$id = intval($_GET['id']);

// Ambil data produk dari database berdasarkan ID
$sql = "SELECT * FROM tblproduct WHERE id = $id";
$result = $conn->query($sql);

// Periksa apakah produk ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $judul = $row['judul'];
    $harga = $row['harga'];
    $gambar = $row['gambar'];
} else {
    $judul = "Produk tidak ditemukan";
    $harga = "";
    $gambar = "";
}

$sql2 = "SELECT * FROM fasilitas_kamar WHERE id = $id";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $fasilitas1 = $row2['fasilitas1'];
    $fasilitas2 = $row2['fasilitas2'];
    $fasilitas3 = $row2['fasilitas3'];
    $fasilitas4 = $row2['fasilitas4'];
    $fasilitas5 = $row2['fasilitas5'];
    $fasilitas6 = $row2['fasilitas6'];
    $fasilitas7 = $row2['fasilitas7'];
    $fasilitas8 = $row2['fasilitas8'];
    $fasilitas9 = $row2['fasilitas9'];
    $fasilitas10 = $row2['fasilitas10'];
}

$sql3 = "SELECT * FROM fasilitas_km WHERE id = $id";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    $row3 = $result3->fetch_assoc();
    $km1 = $row3['fasilitas1'];
    $km2 = $row3['fasilitas2'];
    $km3 = $row3['fasilitas3'];
    $km4 = $row3['fasilitas4'];
    $km5 = $row3['fasilitas5'];
} else {
    $judul = "Produk tidak ditemukan";
    $harga = "";
}

$sql4 = "SELECT * FROM peraturan_khusus WHERE id = $id";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    $row4 = $result4->fetch_assoc();
    $pk1 = $row4['fasilitas1'];
    $pk2 = $row4['fasilitas2'];
    $pk3 = $row4['fasilitas3'];
    $pk4 = $row4['fasilitas4'];
    $pk5 = $row4['fasilitas5'];
} else {
    $judul = "Produk tidak ditemukan";
    $harga = "";
}

$conn->close();
?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../home.php">KEMBALI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../home.php"></a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html"></a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html"></a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('kamar/<?php echo $row['gambar'];?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1 style="opacity: 0;">Tipe A</h1>
                            <span class="subheading" style="opacity: 0;">800.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="foto.php?id=<?php echo $row["id"];?>" class="foto"><button>Lihat Foto</button></a>
        </header>

        <div class="text">
            <h1 style="position: relative; left: 100px; margin-bottom: 30px;">Kost Pondok Umaru <?php echo $judul; ?> Bogor Barat</h1>
            <h3 style="position: relative; left: 100px;"><?php echo $harga; ?></h3>
        </div>
            
        <hr class="my-4" />

        <!-- Main Content-->
        <div class="container px-4 px-lg-5" style="position: relative; right: 320px;">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Fasilitas Kamar</h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <div class="container">
                            <div class="list">
                                <div class="list-item"><li><?php echo $fasilitas1; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas2; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas3; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas4; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas5; ?></li></div>
                            </div>
                            <div class="list">
                                <div class="list-item"><li><?php echo $fasilitas6; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas7; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas8; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas9; ?></li></div>
                                <div class="list-item"><li><?php echo $fasilitas10; ?></li></div>
                            </div>
                        </div>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Fasilitas Kamar Mandi</h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <div class="container">
                            <div class="list">
                                <div class="list-item"><li><?php echo $km1;?></li></div>
                                <div class="list-item"><li><?php echo $km2;?></li></div>
                                <div class="list-item"><li><?php echo $km3;?></li></div>
                                <div class="list-item"><li><?php echo $km4;?></li></div>
                                <div class="list-item"><li><?php echo $km5;?></li></div>
                            </div>
                        </div>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Peraturan Khusus Kamar </h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <div class="container">
                            <div class="list">
                                <div class="list-item"><li><?php echo $pk1;?></li></div>
                                <div class="list-item"><li><?php echo $pk2;?></li></div>
                                <div class="list-item"><li><?php echo $pk3;?></li></div>
                                <div class="list-item"><li><?php echo $pk4;?></li></div>
                                <div class="list-item"><li><?php echo $pk5;?></li></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="kamar/PU.jpg" width="100px" height="100px" alt="" style="opacity: 0;">
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
