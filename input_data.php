<?php
	include "koneksi.php";

$Nama		    = $_POST['nama'];
$Jenis_kelamin  = $_POST['jenkel'];
$Kelas          = $_POST['kelas'];
$Alamat         = $_POST['alamat'];
$No_telp        = $_POST['telp'];


$query = "INSERT into tb_latihan1 (nama,jenis_kelamin,kelas,alamat,no_telp) 
	      VALUES ('$Nama','$Jenis_kelamin','$Kelas','$Alamat','$No_telp')";
$hasil = mysqli_query($conn ,$query);
	
if ($hasil){
	header ("location:indexx.php");
}
else {
	echo "Input Gagal";
}

?>



