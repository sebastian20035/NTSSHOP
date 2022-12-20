<h2>DETAIL PEMBELIAN</h2>

<?php 
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<pre>
    <?php print_r($detail); ?>
</pre>

<strong>
    <?php echo $detail['nama_user']; ?>
</strong>
<br>
<p>
    <?php echo $detail['telepon_user']; ?> <br>
    <?php echo $detail['email_user']; ?>
</p>

<p>
    tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
    total: <?php echo $detail['total_pembelian']; ?>
</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>nama produk</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td><?php echo $pecah['harga_produk']; ?></td>
                <td><?php echo $pecah['jumlah']; ?></td>
                <td><?php echo $pecah['harga_produk']*$pecah['jumlah']; ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>