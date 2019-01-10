<?php 
	include "koneksi.php";

$Id = $_GET['id'];

$hapus = "DELETE FROM tb_latihan1 WHERE id = '$Id'";
$hasil = mysqli_query($conn, $hapus);

if ($hasil){
	echo "<script>
			  alert('Hapus data berhasil');
		      document.location.href='index.php';
		  </script>";
}
else{
	echo "Hapus data gagal";
}

?>