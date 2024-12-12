<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = '';
$NAME = 'dbkosan';
// menghubungkan ke database
$conn = mysqli_connect($HOST, $USER, $PASS, $NAME);
if (mysqli_connect_errno()) {
    exit('Gagal terhubung ke MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['kirim'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `tblpesan` (name, number, email, pesan) VALUES ('$name', '$number', '$email', '$message')";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        echo "Data tidak berhasil disimpan";
    } else {
        echo "<script>alert('Data berhasil disimpan')</script>";
    }

    mysqli_close($conn);
}

header("Location: home.php");
