<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pondok Umaru</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/houser.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="css/tombol.css">
        <link rel="stylesheet" href="css/headers3.css">
        <link rel="stylesheet" href="css/button.css" >
        <link rel="stylesheet" href="css/text4.css">
        <link rel="stylesheet" href="css/sewa.css">
        <link rel="stylesheet" href="css/forum.css">
        <link rel="stylesheet" href="css/popup.css">
    </head>

    <?php
    include "koneksi.php";
    
    $sql1 = "SELECT * FROM tblheader";
    $query1 = mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_array($query1)) {
    $judul = $row['judul'];   
    $subjudul = $row['subjudul1'];
    $subjudul2 = $row['subjudul2'];

    }

    $sql3= "SELECT * FROM tblabout";
    $query3= mysqli_query($conn,$sql3);
    while($row=mysqli_fetch_array($query3)) {
    $judul2=$row['judul'];
    $isi=$row['isi'];
    $gambar=$row['gambar'];

    }

    $sql2= "SELECT * FROM tblservice";
    $query2= mysqli_query($conn,$sql2);

    $sql4= "SELECT * FROM tblproduct";
    $query4= mysqli_query($conn,$sql4);

    $sql5= "SELECT * FROM tblfasilitas";
    $query5= mysqli_query($conn,$sql5);

    ?>
    <?php
    include "navbar.php";
    include "header.php";
    ?>


        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $judul2;?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="">
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="gambar" src="foto/<?php echo $gambar;?>" alt="..." style="float: left; position: relative; bottom: 95px; left: -60px; width: 300px; height: 300px;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body" ><p class="text-muted" style="float: none; font-weight: bold; font-size:large;"><?php echo $isi;?></p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="" style="opacity: 0;"></section>
        <!-- Services -->
        <link rel="stylesheet" href="css/text3.css">
        <link rel="stylesheet" href="css/borders3.css"/>
        <section class="page-section bg-warning" id="services"">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: #000000; margin-top: -40px;">PONDOK UMARU</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div><br>
                <div class="row text-center">
                <?php 
                while($row=mysqli_fetch_array($query2)) {
                ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portofolio-item">
                    <div class="border">
                        <div class="sekat">
                            <img src="foto/<?php echo $row["gambar"];?>" />
                            <h4 class="my-3"><?php echo $row["isi"];?></h4>  
                        </div>
                    </div>
                    </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </section>

        <section class="page-section bg-info" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: #000000; margin-top: -40px;">FASILITAS UMUM</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div><br>
                <div class="row text-center">
                <?php 
                while($row1=mysqli_fetch_array($query5)) {
                ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portofolio-item">
                    <div class="border">
                        <img src="foto/<?php echo $row1["gambar"];?>" />
                        <h4 class="my-3"><?php echo $row1["judul"];?></h4>
                    </div>
                    </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </section>

        <!-- Produk-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tipe Kamar</h2>
                    <h3 class="section-subheading text-muted">Tersedia Beberapa Tipe Kamar</h3>
                    <div class="" style="margin-bottom: 10px;"></div>
                </div>
                <div class="row">
                
                <?php
                while ($row1 = mysqli_fetch_array($query4)) {
                ?>
                <div class="col-lg-4 col-sm-6 mb-4 col-md-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                            <img class="img-fluid" id="name" width="415px" height="auto" src="kamar/<?php echo $row1["gambar"];?>" alt="..." />
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php echo $row1["judul"];?></div>
                            <div class="portfolio-caption-subheading text-muted"><?php echo $row1["harga"];?></div>
                            <p class="p">Status: <?php echo $row1["status"];?></p>
                            <a href="details/index.php?id=<?php echo $row1["id"];?>" class="selengkap"><button>Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                            
        </section>
          
        <!-- Order -->
        <div class="kotak-2">
            <h3 class="text-1">TERTARIK UNTUK MENGINAP DISINI?</h3>
            <div class="button-sewa">
                <a href="#popup"><button>AJUKAN SEWA</button></a>
            </div>
        </div>

        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__img">
                    <a href="#about" class="popup__close">&times;</a>
                </div>
                <div class="popup__header">
                    <h1>Booking Sekarang!</h1>
                    <h2>Mohon Dibaca Pernyataan Dibawah Ini Sebelum Memesan</h2>
                </div>
                <div class="card__details">
                    <ul>
                        <li>Isilah Form Dengan Menekan Tombol Dibawah Ini</li>
                        <a href="pesan.html" class="booking popup__btn">BOOK NOW</a>
                        <li>Kirim Foto KTP/Identitas diri</li>
                        <li>Selesaikan Pembayaran (Transfer/Cash)</li>
                    </ul>
                </div>
                
            </div>
        </div>

        <!-- Contact-->
        <div class="body" id="kontak" style="background-image: url('assets/img/map-image.png');">
            <div class="form-container">
                <h2>Contact Us</h2>
                <form action="simpan.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="number">No. HP</label>
                        <input type="number" id="number" name="number" placeholder="Enter your number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="4" placeholder="Your comments" required></textarea>
                    </div>
                    <button type="submit" id="kirim" name="kirim" class="btn-submit">Kirim Pesan</button>
                    <h2 style="margin-top: 40px;">Location</h2>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.564967931937!2d106.76111707457991!3d-6.576455464287425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c54d6194c92d%3A0x5b3acbd2e05da5e!2sPondok%20Umaru%20D74!5e0!3m2!1sid!2sid!4v1716863817089!5m2!1sid!2sid" width="535" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" frameborder="0" tabindex="0"></iframe>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- Testimoni-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center" >
                    <h2 class="section-heading text-uppercase">Testimoni</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                
                <div class="row" >

                <?php
                $sql9 = "SELECT * FROM tbltestimoni";
                $query9 = mysqli_query($conn, $sql9);
                    if(mysqli_num_rows($query9) > 0) {
                        while($row9 = mysqli_fetch_array($query9)) {
          
                ?>
                      
                        <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portofolio-item">
                        <div class="container-testi">
                        <div class="border-testi">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="foto/<?php echo $row9["gambar"];?>" alt="" />
                                <h4><?php echo $row9["nama"];?></h4>
                                <p class="text-muted"><?php echo $row9["ulasan"];?></p>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>  
                <?php
                      }
                    }
                ?>
            

                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center lorem">
                        <p class="large text-muted">Beberapa testimoni dari beberapa pelanggan kami yang sudah pernah menginap disini.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <?php
        include "footer.php";
        ?>

<?php
    $conn->close();
?>

