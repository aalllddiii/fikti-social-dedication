<?php

    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db     = 'data_mhs_ficion';

    // $host = "localhost"; //host server
    // $user = "bemfikti_heroes"; //user login phpmyadmin
    // $pass = "heroes2019"; //pas login phpmyadmin
    // $db = "bemfikti_heroes"; //name database

    $conn    = mysqli_connect($host, $user, $pass, $db) or die ("ERROR");

    // if ($conn){
    //     echo "ada koneksi ke database";
    // }

?>