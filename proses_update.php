<?php 
    include "koneksi.php";

    $ID = $_POST["id"];
    $NAMA = $_POST["nama"];
    $JENKEL = $_POST["jenkel"];
    $KELAS = $_POST["kelas"];
    $ALAMAT = $_POST["alamat"];
    $No_hape = $_POST["telp"];

    $query = "UPDATE tb_latihan1 (id,nama,jenis_kelamin,kelas,alamat,no_telp)
            SET
         id = '$ID', 
         nama = '$NAMA', 
         jenis_kelamin = '$JENKEL', 
         alamat = '$ALAMAT', 
         no_telp='$No_hape' 
         WHERE id = $_GET[id]";

    $sql = mysqli_query($conn,$query);

         if($update == true){
			echo"<script>
			    	alert('Data berhasil diubah');
					document.location.href='index.php';
				</script>";
		}else{
			echo"<script>
					alert('Data Gagal di update');
					document.location.href='index.php';
                </script>";
    }
?>