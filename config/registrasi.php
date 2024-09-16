<?php

    include "koneksi.php";

    if (isset($_POST['kirim'])){
   
    $nama = mysqli_real_escape_string($conn,$_POST['nama']);
    $profesi = mysqli_real_escape_string($conn,$_POST['profesi']);
    $asal_instansi = mysqli_real_escape_string($conn,$_POST['asal_instansi']);
    $usia = mysqli_real_escape_string($conn,$_POST['usia']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $hp = mysqli_real_escape_string($conn,$_POST['hp']);
    $kota = mysqli_real_escape_string($conn,$_POST['kota']);



    

        $insertquery    = mysqli_query($conn, "INSERT INTO `ficion2022` (`nama`,`profesi`,`asal_instansi`,`usia`,`email`,`hp`,`kota`) 
                                                            VALUES ('$nama','$profesi','$asal_instansi','$usia','$email','$hp','$kota')");
    
    if ($insertquery) {
        echo "<script>alert('Register sukses');
        location.href='registered.php';</script>";
    }else{
        echo "<script>alert('Gagal register');
        location.href='../';</script>";
    }

}

?>