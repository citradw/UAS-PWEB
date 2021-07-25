<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" type="text/css" href="styleuas.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
    </head>
    <body>
        <div class="panah">
            <a href="index.php"><i class="fas fa-arrow-alt-circle-left"></i></a>
            <a href="hal2.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
            <a href="hal3.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
            <a href="logout.php"><i class="fas fa-arrow-alt-circle-right"></i></a>
            <div class="header">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="hal2.php">ABOUT</a></li>
                    <li class="active"><a href="hal3.php">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <div class="konten">
                <div class="konten1">
                    <h3 align="center">Media Sosial</h3>
                    <ul>
                    <li><a href="https://www.instagram.com/cittdewi"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="https://t.me/citradewi"><i class="fab fa-telegram-plane fa-2x"></i></a></li>
                        <li><a href="https://twitter.com/citradewi"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://line.me/ti/p/~citradewi_"><i class="fab fa-line fa-2x"></i></a></li>
                        <li><a href="mailto:citradw846@gmail.com"><i class="fas fa-envelope-open fa-2x"></i></a></li>
                        <li><a href="https://wa.me/6281367143346"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                        </ul>
                </div>
                <div class="konten2" align="center">
                    <h3>Contact & Text Me</h3>
            <div class="biodata">
            <table class="table">
            <tr>
                <td style="width:120px;">Penerima</td>
                <td style="width:120px;">citradw846@gmail.com</td>
            </tr>
            <tr>
                <td style="width:120px;">Instagram</td>
                <td style="width:120px;">@cittdewi</td>
            </tr>
            <tr>
                <td style="width:120px;">E-mail</td>
                <td><input id=e-mail name:e-mail type=mail placeholder="e-mail@unicorn.com" required></td>
            </tr>
            <tr>
                <td style="width:120px;">Pesan</td>
                <td><textarea name="" row="5" cols="30"></textarea></td>
            </tr>
            <tr>
                <td><a href="index.php"><button class="button2" type="submit">Cancel</button></a></td>
                <td><button class="button" onclick="klik()" type="submit">Kirim</button></td>
            </tr>
        </table>
    </div>
        <script type="text/javascript">
        function klik() {
            alert("Masukan Anda Telah Terkirim!")
        }
        </script>
        <h4>Terima Kasih</h4>
        <h4>Atas Kunjungan Website Nya</h4>
                 </div>
            </div>
            <div class="footer">
                <p>&copy 213 - Citra Dewi - TIF - UAD</p>
            </div>
        </div>
    </body>
</html>