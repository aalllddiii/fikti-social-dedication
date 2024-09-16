<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body style="background:url(../css/bgwebpolosan.jpg);height:100vh;">
    <center>
        <h1 class="CaptionH1">Registration Form</h1>
        <form action="registrasi.php" method="post">
            <table>

                <tr>
                    <td class="td">Nama Lengkap</td>
                    <td>:</td>
                    <td><input id="name" name="nama" type="text" placeholder="Your name.." required></td>
                </tr>

                <tr>
                    <td class="td">Profesi</td>
                    <td>:</td>
                    <td><input name="profesi" type="text" id="profesi" required></td>
                </tr>

                <tr>
                    <td class="td">Asal Instansi</td>
                    <td>:</td>
                    <td><input name="asal_instansi" type="text" id="asal_profesi" required></td>
                </tr>

                <tr>
                    <td class="td">Usia</td>
                    <td>:</td>
                    <td><input name="usia" type="tel" id="usia" pattern=".*\S+.*" onkeypress="return hanyaAngka(event)" required></td>
                </tr>

                <tr>
                    <td class="td">E-mail</td>
                    <td>:</td>
                    <td><input name="email" type="text" id="email" required></td>
                </tr>

                <tr>
                    <td class="td">No hp</td>
                    <td>:</td>
                    <td><input name="hp" type="tel" id="hp" pattern=".*\S+.*" onkeypress="return hanyaAngka(event)" required></td>
                </tr>

                <tr>
                    <td class="td">Kota</td>
                    <td>:</td>
                    <td><input name="kota" type="text" id="kota" required></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>

    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>
</body>