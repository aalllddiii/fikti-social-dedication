<?php
    session_start();
    include "../config/koneksi.php";

    if (!isset($_SESSION['username'])){
        echo "<script>alert('Login dulu masbro');
        location.href= '../'
        </script>";
    }
    
    $tampil = mysqli_query($conn, "SELECT * FROM `ficion2022`")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Bootstrap Styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../logo.jpg" style="width: 25px; border-radius:50%;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link custom-font-home " href="index.php">Dashboard<span
                            class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link text-info" href="si.php">Data pendaftar SI</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="sk.php">Data pendaftar SK</a>
                    </li> -->


                <li class="nav-item">
                    <a class="nav-link text-danger" href="../config/logout.php"
                        onclick="return confirm('Apakah anda ingin keluar?')">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    </br>
    <div class="table-responsive container">
        <h2 style="text-align:center">Total Pendaftar</h2>
        </br>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-inbox fa-5x"></i>
                            <h3>
                                <?php
                                        include "../config/koneksi.php";
                                        $tampil = "SELECT * FROM ficion2022 ";
                                        $query = mysqli_query($conn,$tampil);
                                        $count = mysqli_num_rows($query);
                                        echo "$count";
                                                        ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            Ini adalah Data Pendaftar :
                            <a class="nav-link text-info" href="daftar.php">Data pendaftar</a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                                <div class="panel-body">
                                    <i class="fa fa-inbox fa-5x"></i>
                                    <h3>

                                        include "../../config/koneksi.php";
                                        $tampil = "SELECT * FROM halo_fikti1 ";
                                        $query = mysqli_query($con,$tampil);
                                        $count = mysqli_num_rows($query);
                                        echo "$count";
                                                        ?>
                                    </h3>
                                </div>
                                <div class="panel-footer back-footer-green">
                                    Pendaftar Jurusan sk

                                    <a class="nav-link text-info" href="sk.php">Data pendaftar SK</a>

                                </div>
                            </div>
                        </div> -->
                        

                

                    
            </div>


        </div>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script>
            AOS.init();

            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
</body>

</html>