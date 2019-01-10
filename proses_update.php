<?php 
    include "koneksi.php";

    $ID = $_POST["id"];
    $NAMA = $_POST["nama"];
    $JENKEL = $_POST["jenkel"];
    $KELAS = $_POST["kelas"];
    $ALAMAT = $_POST["alamat"];
    $No_hape = $_POST["telp"];

    $query = "UPDATE tb_latihan1
            SET
         id = '$ID', 
         nama = '$NAMA', 
         jenis_kelamin = '$JENKEL',
         kelas = '$KELAS',
         alamat = '$ALAMAT', 
         no_telp='$No_hape' 
         WHERE id = '$ID'";

    $sql = mysqli_query($conn,$query);

         if($sql){
			echo"<script>
			    	alert('Data berhasil diubah');
					document.location.href='index.php';
				</script>";
		}else{
			echo"gagal diupdate";
    }
?>