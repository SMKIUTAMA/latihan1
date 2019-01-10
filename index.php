<?php
include "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM tb_latihan1 ORDER BY id");
?>

<html>
<head>    
    <title>Tampilan</title>
</head>

<body>
<a href="forminsert.php">Tambah Data</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis_kelamin']."</td>"; 
        echo "<td>".$user_data['kelas']."</td>"; 
        echo "<td>".$user_data['alamat']."</td>"; 
        echo "<td>".$user_data['no_telp']."</td>"; 
        echo "<td><a href='form_update.php?id=$user_data[id]'>Edit</a> | <a href='hapus.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
