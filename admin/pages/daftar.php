<?php
    session_start();
    include "../config/koneksi.php";

    if (!isset($_SESSION['username'])){
        echo "<script>alert('Log in dulu ya');
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
    <title>Day 1</title>

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
                    <li class="nav-item">
                        <a class="nav-link text-info" href="si.php"></a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="sk.php"></a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="../config/logout.php" onclick="return confirm('Apakah anda ingin keluar?')">Log Out</a>
                    </li>

                </ul>
            </div>
        </nav>


    <div class="table-responsive jumbotron">
    <h2>Data pendaftar</h2>
    <a href="../config/laporanexcel.php" class="btn btn-success" >Report Excel</a>
    </br>
    </br>
    <table id="data-example" class="table table-striped table-bordered table-hover text-center" style="width:100%">
   <center>
    <thead>
        <tr>
        <th class= "text-center">no</th>
            <th class= "text-center">nama</th>
            <th class= "text-center" scope="col">profesi</th>
            <th class= "text-center" scope="col">usia</th>
            <th class= "text-center" height="50px">Asal Instansi</th>
            <th class= "text-center" scope="col">email</th>
            <th class= "text-center" scope="col">hp</th>
            <th class= "text-center" scope="col">kota</th>
            <td class= "text-center" scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td>
             
        </tr>
    </thead>
    </center>
    <?php

    $no=1;
    $tampil = mysqli_query($conn,"select * from ficion2022");
    while($data = mysqli_fetch_array($tampil)){

    ?>
    <tbody>
        <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['profesi'];?></td>
                <td><?php echo $data['asal_instansi'];?></td>
                <td><?php echo $data['usia'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['hp'];?></td>
                <td><?php echo $data['kota'];?></td>
                <td>
                <a class="btn-danger" onclick="return confirm('Yakin ingin hapus?')" href="../config/hapus.php?nama=<?php echo $data['nama'];?> "><i class="fa fa-trash" style="padding: 3px; border-radius:30%;"></i></a>
                </td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
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