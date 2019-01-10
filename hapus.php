<?php 
	include "koneksi.php";

$Id = $_GET['id'];

$hapus = "DELETE FROM tb_latihan1 WHERE id = '$Id'";
$hasil = mysqli_query($conn, $hapus);

if ($hasil){
	
	echo "<script type='text/javascript'>confirm('Anda yakin ingin menghapus data?')</script>";
	echo "<meta http-equiv='refresh' content='0.0;url=index.php'>";
}
else{
	echo "Hapus data gagal";
}

?>