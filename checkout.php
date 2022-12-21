<?php 
session_start();
$koneksi = new mysqli("localhost","root","","pemweb");

$id_produk = $_GET['id'];

if (!isset($_SESSION["user"]))
{
    echo "<script>alert('anda harus login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="">BERANDA</a></li>
                <li><a href="">PRODUK</a></li>
                <li><a href="">HUBUNGI KAMI</a></li>
                <li><a href="">CHECKOUT</a></li>
            </ul>
        </div>
    </nav>

    <section class="konten">
        <div class="container">
            <h1>Checkout</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah Item</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $pecah['nama_produk']; ?></td>
                        <td><?php echo $pecah['nominal_produk']; ?></td>
                        <td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>