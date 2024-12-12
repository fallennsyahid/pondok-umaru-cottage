<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'dbkosan';
// connect ke database.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // jika ada error connection, stop the script dan tampilkan errornya.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>