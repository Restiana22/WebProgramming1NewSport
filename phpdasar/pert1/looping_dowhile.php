<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Do While</title>
</head>
<body>
    <?php 
        $angka = 10;
        do{
            echo $angka--;
            echo "<br>";
        } while($angka>=1) //<= 0 -1 -2 -3
    ?>
    
</body>
</html>