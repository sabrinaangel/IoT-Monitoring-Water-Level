/*menerima data dari ESP32 dan menyimpannya ke dalam database.*/


<?php
$servername = "localhost"; // Ganti dengan alamat server MySQL Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "test"; // Ganti dengan nama database Anda

// Membuat koneksi
$konek = new mysqli($servername, $username, $password, $dbname);

//semua data
//sumbu y
$ketinggian = mysqli_query($konek, "SELECT ketinggian FROM tb_sensor ORDER BY ID ASC");
// sumbu x
$waktu = mysqli_query($konek, "SELECT waktu FROM tb_sensor ORDER BY ID ASC");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari request
$distance = $_GET['distance'];

// Menyimpan data ke dalam tabel
$sql = "INSERT INTO sensor_data (distance) VALUES ('$distance')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>