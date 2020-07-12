<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemrograman WEB : Responsi</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <h1>Selamat datang Calon anggota Tim</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="daftar.php">Daftar</a></li>
        <li><a href="tentang.html">Tentang</a></li>
    </ul>

    <h1>1700018106 - Brilian Anugra - Slot Jum'at 07.30</h1>
    <div class="counter">
        <?php
                $filelain = "ini.txt";
        
                function counter(){
                    global $filelain;
                    if(file_exists($filelain)){
                        $value = file_get_contents($filelain);
                    }else{
                        $value = 0;
                    }
                    file_put_contents($filelain,++$value);
                }
        
                counter();
                echo 'Selamat Datang<br>';
                echo 'Anda Pengunjung Ke-'.file_get_contents($filelain),'<br>';
                echo 'Responsi Pemrogramana WEB<br>';
            ?>
    </div>
</body>

</html>
