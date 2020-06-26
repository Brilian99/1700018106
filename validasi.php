<?php

    if(isset($_POST['submit'])){

         if((empty($_POST['nama'])) || (empty($_POST['email'])) || 
            (empty($_POST['alamat'])) || (empty($_POST['jenis_kelamin'])) ||
            (empty($_POST['agama'])) || (empty($_POST['hobi']))){

                 echo "Data tidak boleh kosong";
        }else{
            echo '<h1> Hasil Inputan Formulir</h1>';
            echo '<table>';
            echo '<tr><td>Nama Lengkap </td><td> : </td><td>'.$_POST['nama'].'</td></tr>';
            echo '<tr><td>Alamat </td><td> : </td><td>'.$_POST['email'].'</td></tr>';
            echo '<tr><td>Tanggal Lahir </td><td> : </td><td>'.$_POST['alamat'].'</td></tr>';
            echo '<tr><td>Jenis Kelamin </td><td> : </td><td>'.$_POST['jenis_kelamin'].'</td></tr>';
            echo '<tr><td>Pendidikan </td><td> : </td><td>'.$_POST['agama'].'</td></tr>';
            echo '<tr><td>Hobi </td><td> : </td><td>'.$_POST['hobi'].'</td></tr>';
            echo '</table>';
        }
    }
?>