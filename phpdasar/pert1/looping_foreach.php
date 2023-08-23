<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Foreach</title>
</head>
<body>
    <?php 
        $warna = array("Merah", "Biru", "Kuning", "Hijau", "Ungu");
        foreach ($warna as $w) {
            echo $w . "<br>";
        }
    
    ?>
</body>
</html>