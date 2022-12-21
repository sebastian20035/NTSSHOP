<?php 
session_start();
// koneksi DB
$koneksi = new mysqli("localhost","root","","pemweb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FREE FIRE</title>
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

    <!-- Konten -->

    <section class="konten">
        <div class="container">
            <h1>Diamond Free Fire</h1>
            <div class="row">
                
                <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE produk.id_kategori=2 "); ?>
                <?php while($perproduk = $ambil->fetch_assoc()) { ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                    <img src="images/ff.png" alt="">
                        <div class="caption">
                        <h3><?php echo $perproduk['nama_produk']; ?></h3>
                        <h5><?php echo $perproduk['nominal_produk']; ?> Diamond</h5>
                        <h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
                        <a href="checkout.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>