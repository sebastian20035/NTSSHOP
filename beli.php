<?php 
// mendapat id produk dari url
$id_produk = $_GET['id'];

// produk +1 jika sudah terdaftar
if (isset($_SESSION['chart'][$id_produk]))
{
    $_SESSION['chart'][$id_produk] += 1;
}
else{
    $_SESSION['chart'][$id_produk] = 1;
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// echo "<script>alert('produk ditambahkan ke keranjang')</script>";
// echo "<script>location='keranjang.php'</script>";
?>