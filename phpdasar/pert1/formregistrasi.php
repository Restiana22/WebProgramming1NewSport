<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
<form action= "dataregistrasi.php" method="post">
<b><h1>Form Registrasi</h1></b>
<br>
<pre>
Isi Data Dibawah ini :
Nama                     <input type="text" name="nama" size="25" maxlength="30">
Alamat                   <textarea rows=""cols="" name="alamat"></textarea>
Tempat Lahir             <input type="text" name="tempatlhr" size="25" maxlength="30">
Tanggal Lahir            <input type="text" name="tanggallhr" size="25" maxlength="30">
Jenis Kelamin 
                         <input type="radio" name="jeniskel" value="Laki-laki">Laki-laki
                         <input type="radio" name="jeniskel" value="Perempuan">Perempuan
Pendidikan 
                         <select name="pendidikan">
                         <option value="-Pilih-">
                         <option value="SMA">SMA
                         <option value="D3">D3
                         <option value="S1">S1
                         <option value="S2">S2
                         <option value="Lain-lain">Lain-lain
                         </select><br>
</pre>
<input type="submit" value="Submit"><input type="reset" value="Cancel">
</form>
</body>
</html>

