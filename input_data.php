<?php
	include "koneksi.php";

$Nama		    = $_POST['nama'];
$Jenis_kelamin  = $_POST['jenis_kelamin'];
$Kelas  		= $_POST['kelas'];
$Alamat			= $_POST['alamat'];
$No_telp        = $_POST['no_telp'];


$query = "INSERT into tb_siswa (nama,jenis_kelamin,kelas,alamat,no_telp) 
		  VALUES ('$Nama','$Jenis_kelamin','$Kelas','$Alamat','$No_telp')";
$hasil = mysqli_query($koneksi,$query);
	
if ($hasil){
	header ("location:index.php");
}
else {
	echo "Input Gagal";
}

?>



