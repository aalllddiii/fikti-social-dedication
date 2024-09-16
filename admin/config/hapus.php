<?php

    include "koneksi.php";

    $getnama = $_GET['nama'];

    $deletedata = mysqli_query($conn, "DELETE FROM `ficion2022` WHERE nama = '$getnama'");

    if ($deletedata){
        header("location:../pages/daftar.php");
    }else{
        echo "gagal";
    }


?>