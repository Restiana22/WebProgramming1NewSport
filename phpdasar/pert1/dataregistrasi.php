<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempatlhr=$_POST['tempatlhr'];
$tanggallhr=$_POST['tanggallhr'];
$jeniskel=$_POST['jeniskel'];
$pendidikan=$_POST['pendidikan'];
?>
<table border=1>
<tr>
<td>Nama</td><td><?php echo $nama               ; ?></td>
</tr>
<tr>
<td>Alamat</td><td><?php echo $alamat            ; ?></td>
</tr>
<tr>
<td>Tempat Lahir</td><td><?php echo $tempatlhr   ; ?></td>
</tr>
<tr>
<td>Tangal Lahir </td><td><?php echo $tanggallhr ; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel   ; ?></td>
</tr>
<tr>
<td>Pendidikan</td><td><?php echo $pendidikan    ; ?></td>
</tr>
</table>
<a href="formregistrasi.php"><u>Back To Home</u></a>
</body>
</html>