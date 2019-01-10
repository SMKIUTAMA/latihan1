<!DOCTYPE html>
<html>
<head>
	<title>View|form edit</title>
	<style>
				body {
						position: relative;
					   	top:100px;
					 }
				h1 {
						position: relative;

					}
		</style>
</head>
 <body>
 	<?php 
 		include "koneksi.php";
 		$query="SELECT * FROM tb_latihan1 WHERE id = '$_GET[id]'";
 		$hasil=mysqli_query($conn,$query);
 		$row=mysqli_fetch_array($hasil);
 	 ?>
	<form action="proses_update.php" method="post">
<center>
<h1> Form edit data </h1>
<br>
	<table>
<tr>
	<td>ID</td>
	<td><input type="text" name="id" value="<?php echo $user_data['id']; ?>" readonly></td>
</tr>
<tr> 
	<td> Nama </td>
	<td> <input type="text" name="nama" value=" <?php echo $user_data['nama'];?>"></td>
</tr>
<tr> 
	<td> Jenis Kelamin </td>
	<td> 
		<input type="radio" name="jenkel" value="laki"> Laki-Laki
		 <input type="radio" name="jenkel" value="perempuan"> Perempuan
    </td>
</tr>
<tr> 
	<td> Kelas </td>
	<td>
		 <input type="text" name="kelas" value="<?php echo $user_data['kelas']; ?>">
	</td>
</tr>
<tr> 
	<td> Alamat </td>
	<td> 
		 <textarea name="alamat" ><?php echo $user_data['alamat']; ?></textarea>
	</td>
</tr>
<tr> 
	<td> No Telepon </td>
	<td>
		 <input type="text" name="telp" value="<?php echo $user_data['no_telp'];?>">
	</td>
</tr>
<tr> 
	<td>
		<input type="submit" name="edit" value="Edit">
	</td>
	<td>
		<input type="reset" name="bersih" value="Batal">
	</td>
</body>
</html>