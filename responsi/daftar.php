<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemrograman WEB 12</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <h1>Menu pendaftaran : Tim 2n3 project</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="daftar.php">Order</a></li>
        <li><a href="tentang.html">Tentang</a></li>
    </ul>

    <form action="" method="post">
        <table class="rekuitmen">
            <tr>
                <th>Rekuitmen anggota Tim Programmer</th>
            </tr>
            <tr>
                <td>Nama Lengkap : </td>
            </tr>
            <tr>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="gender" value="Laki-laki"> Laki- laki
                    <input type="radio" name="gender" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Email : </td>
            </tr>
            <tr>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nomor WA/HP : </td>
            </tr>
            <tr>
                <td><input type="number" name="nomor"></td>
            </tr>
            <tr>
                <td>Agama :</td>
            </tr>
            <tr>
                <td>
                    <select name="agama" >
                        <option>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bahasa yang dikuasai :</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="bahasa[]" value="HTML">HTML<br>
                    <input type="checkbox" name="bahasa[]" value="CSS">CSS<br>
                    <input type="checkbox" name="bahasa[]" value="Javascript">Javascript<br>
                    <input type="checkbox" name="bahasa[]" value="Phyton">Phyton<br>
                    <input type="checkbox" name="bahasa[]" value="Java">Java<br>
                    <input type="checkbox" name="bahasa[]" value="C++">C++   <br>
                </td>
            </tr>
            <tr>
                <td>Deskripsi Diri :</td>
            </tr>
            <tr>
                <td><textarea name="gambaran" rows="10" cols="25"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim" class="tombol">       <input type="reset" name="reset" class="tombol"></td>
            </tr>
        </table>
    </form>

    <?php

        if(isset($_POST['kirim'])){
            $nama =$_POST['nama'];
            $gender =$_POST['gender'];
            $email =$_POST['email'];
            $number =$_POST['nomor'];
            $agama =$_POST['agama'];
            $bahasa =$_POST['bahasa'];
            $gambaran =$_POST['gambaran'];

            if($nama && $email){
                $fp = fopen("calon_tim.txt","a+");

                fputs($fp, "\n Nama : $nama\n Jenis Kelamin : $gender\n Email : $email\n Nomor WA/HP : $number\n Agaman : $agama\n Bahasa Pemrograman : ");
                    foreach($_POST["bahasa"] as $bahasa){
                        fputs($fp, " | $bahasa");
                    }
                fputs($fp, "\n Deskripsi diri : $gambaran");
                fclose($fp);

                echo '<script language="javascript">alert("Terima kasih");</script>';
            }else{
                echo '<script language="javascript">alert("Mohon isi data dengan benar");</script>';
            }
        }


    ?>
</body>
</html>
