<?php

include "../koneksi.php";

$id = $_GET['id'];

if($hapus = mysqli_query($connect,"DELETE FROM bobot where id='$id'")) {
	echo "<script>alert('Berhasil Hapus Data Bobot');</script>";
	echo "<meta http-equiv='refresh' content='0; url=data-kriteria-bobot.php'>";
} else {
	echo "<script>alert('Gagal Hapus Data Bobot');</script>";
	echo "<meta http-equiv='refresh' content='0; url=data-kriteria-bobot.php'>";
}

$connect->close();
exit();

?>