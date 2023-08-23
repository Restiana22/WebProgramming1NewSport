<html>
<head>
    <title>Perhitungan Saldo</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<b><h3>PERHITUNGAN SALDO</h3></b>
<P>===================================================</P>
<br>
<hr>
<pre>

Saldo Awal  =           <input type="text" name="saldo_a" size="25" maxlength="50">
Bunga       =           <input type="text" name="bunga" size="25" maxlength="50">%
Lama Bulan  =           <input type="text" name="lama_bulan" size="25" maxlength="50">
</pre>
<input type="submit" value="Kirim"><input type="reset" value="Batal">
</form>
</body>
</html>




<?php
    error_reporting(0);
    $saldo_a = $_POST['saldo_a'];
    $bunga = $_POST['bunga'];
    $lama_bulan = $_POST['lama_bulan'];

echo "<h3>PERHITUNGAN SALDONYA ADALAH</h3>";
echo "<P>=========================================</P>";
if(!empty($saldo_a)){
    echo "<br>Saldo Awal  = Rp.$saldo_a <br>";
}
if(!empty($bunga)){
    echo "Bunga =  $bunga% <br>";
}
if(!empty($lama_bulan)){
    echo "Lama Bulan = $lama_bulan <br>";
}

$perhitungan = $saldo_a / $bunga * $lama_bulan *2;

echo "Saldo akhir setelah $lama_bulan adalah : Rp.$perhitungan,-";
?>
</body>

</html>

