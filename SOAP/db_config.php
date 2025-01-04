<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "soap_crud_db";

// Koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
