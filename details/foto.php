<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Umaru</title>
    <link rel="icon" type="image/x-icon" href="../assets/houser.png" />
    <link rel="stylesheet" href="css/foto.css">
    <link rel="stylesheet" href="css/button2.css">
    <link rel="stylesheet" href="../css/close.css">
</head>

<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'dbkosan');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID produk dari URL
$id2 = intval($_GET['id']);

// Ambil data produk dari database berdasarkan ID
$sql = "SELECT * FROM tblproduct WHERE id = $id2 LIMIT 6";
$result = $conn->query($sql);

// Periksa apakah produk ditemukan
if ($result->num_rows > 0) {
    $row1 = $result->fetch_assoc();
    $gambar = $row1['gambar'];
} else {
    $gambar = "Gambar tidak ditemukan";
}
?>
<body>
    <div class="text">
        <h1>Foto Selengkapnya</h1>
    </div>
    <div class="con_cls">
        <a href="index.php?id=<?php echo $row1["id"];?>" class="cls_btn" style="font-size: 55px;">&times;</a>
    </div>
    <div class="foto">
        <ul>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
            <a><img src="kamar/<?php echo $row1['gambar'];?>" width="500px" height="300px"/></a>
        </ul>
    </div>
</body>
</html>