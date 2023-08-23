<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Foreach</title>
</head>
<body>
    Menggunakan Foreach
    <br>
    <?php
    $warna = array("Merah", -1, 30.4, "Why");
    foreach ($warna as $nilai) {
        echo "$nilai <br>";
    }
    ?>
</body>
</html>