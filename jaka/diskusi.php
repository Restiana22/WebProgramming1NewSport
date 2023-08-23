<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <meta charset="UTF-8">  
        <title>News Sport</title>  
        <meta name="viewport" content="width=device-width,initial scale=1.0">  
        <link rel="stylesheet" href="style.css">  
    </head>  
    <body>  
        <div class="container">
            <div class="header">  
                <h1 align="center"><font color="white">News Sport</font></h1>
            </div>
                <div class="left">
                    <h3 align="center">Menu</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="sepakbola.html">Sepakbola</a></li>
                        <li><a href="bulutangkis.html">Bulutangkis</a></li>
                        <li><a href="esport.html">Esport</a></li>
                        <li><a href="diskusi.php">Diskusi</a></li>
                    </ul>
                </div>
                <div class="middle">
                    <h2>Form Diskusi</h2>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <pre>
                        Isikan Nama:<input type="text" name="nama">
                        Isikan No Telp : <input type="text" name="notelp">
                        Isikan Alamat : <textarea name="alamat" rows="5" cols="40"></textarea>
                        <input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
                        </pre>
                        </form>
                
                        <?php
                        $nama=$_POST['nama'];
                        $telp=$_POST['notelp'];
                        $alamat=$_POST['alamat'];
                        if (!empty($nama)){
                            echo "nama       :$nama<br>";}
                        if (!empty($telp)){
                            echo "No telp       :$telp<br>";}
                        if (!empty($alamat)){
                            echo "Alamat       :$alamat<br>";}
                        ?>
                </div>
                <div class="right"> 
                    <h3 align="center">Berita Terbaru</h3>
                </br> 
                        <ul>  
                            <a href="beritaesport2.html"><img src="beritaesport2.png" height="125" width="200" style="display:block;margin:auto;"/> </a>
                            <li><a href="beritaesport2.html">SEA Games 2023 Kamboja: Timnas Mobile Legends Wanita Raih Emas</a></li> 
                            <a href="beritabola2.html"><img src="beritabola2.png" height="125" width="200" style="display:block;margin:auto;" /> </a>
                            <li><a href="beritabola2.html">Hasil Final Piala Dunia 2022 Argentina vs Prancis</a></li> 
                            <a href="beritabulu1.html"><img src="beritabulu1.png" height="125" width="200" style="display:block;margin:auto;" /> </a>
                            <li><a href="beritabulu1.html">Bulu Tangkis Sumbangkan Dua Medali Emas SEA Games 2022</a></li> 
                            <a href="beritabola1.html"><img src="Beritabola1.png" height="125" width="200" style="display:block;margin:auto;"/> </a>
                            <li><a href="beritabola1.html">Timnas Indonesia U-22 Rebut Emas SEA Games 2023</a></li>
                            <a href="beritaesport1.html"><img src="beritaesport1.jpeg" height="125" width="200" style="display:block;margin:auto;" /> </a>
                            <li><a href="beritaesport1.html">Indonesia Juara Dunia Mobile Legends M1 World Championship</a></li>  
                        </ul>  
                </div>
            <div class="footer">
                <p align="center">Contact us:</p>
            </div>
        </div>  
    </body>  
</html>