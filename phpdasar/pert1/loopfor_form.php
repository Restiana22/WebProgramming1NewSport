<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan For dalam FORM</title>
</head>
<body>
    <form action="" method="post">
    <select name="tanggal" id="">
        <option value="">-== Pilih Tanggal ==-</option>

        <!-- Cara 1-->
        <?php
            for($tanggal=1; $tanggal<=31; $tanggal++){
                echo "<option value='$tanggal'>$tanggal</option>";
            }
        ?> 
    </select>

    <br></br>

    <select name="tanggal2">
        option value="">-== Pilih Tanggal ==-</option>

         <!-- Cara 2-->
        <?php for($tanggal2=1; $tanggal2<=31; $tanggal2++):  ?>
            <option value="<?= $tanggal2 ?>"><?= $tanggal2 ?
            ></option>
        <?php endfor; ?>

    </select>
    </form>
</body>
</html>