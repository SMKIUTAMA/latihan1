<!DOCTYPE html>
<html>
<head>
	<title>View|Form Insert</title>
		<style>
				body {
						position: relative;
					   	top:100px;
					 }
				h1 {
						position: relative;
					   	bottom: 20px;

					}
		</style>

</head>
<body>
	<form action="input_data.php" method="post">
<center>
<h1> Form Pengisian </h1>
<br>
	<table>
<tr> 
	<td> Nama </td>
	<td> <input type="text" name="nama"></td>
</tr>
<tr> 
	<td> Jenis Kelamin </td>
	<td> 
		<input type="radio" name="jenkel" value="laki-laki"> Laki-Laki
		 <input type="radio" name="jenkel" value="perempuan"> Perempuan
    </td>
</tr>
<tr> 
	<td> Kelas </td>
	<td>
		 <input type="text" name="kelas">
	</td>
</tr>
<tr> 
	<td> Alamat </td>
	<td> 
		 <textarea name="alamat"></textarea>
	</td>
</tr>
<tr> 
	<td> No Telepon </td>
	<td>
		 <input type="text" name="telp">
	</td>
</tr>
<tr> 
	<td>
		<input type="submit" name="kirim" value="Kirimkan">
	</td>
	<td>
		<input type="reset" name="bersih" value="Batalkan">
	</td>
</tr>
</body>
</html>