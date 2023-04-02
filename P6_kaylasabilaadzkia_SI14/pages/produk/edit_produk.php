<?php 
require_once '../../database/dbkoneksi.php';
include_once '../template/head.php';
include_once '../template/navbar.php';

$id = $_GET['idedit'];
$sql = "SELECT * FROM produk WHERE id = ?";
$statment = $dbh->prepare($sql);
$statment->execute([$id]);
$result = $statment->fetch();
?>
            
            <div class="container">
    <h2 class="text-center">Form Edit Produk</h2>
    <form method="POST" action="../../proses/produk/proses_produk.php">
        <input type="hidden" name="idedit" value="<?= $result['id'] ?>" type="text">
        <div class="form-group">
            <label for="kode" class="form-label">Kode</label>
            <input id="kode" name="kode" value="<?= $result['kode'] ?>" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Produk</label>
            <input id="nama" name="nama" value="<?= $result['nama'] ?>" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input id="harga_beli" name="harga_beli" value="<?= $result['harga_beli'] ?>" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input id="stok" name="stok" value="<?= $result['stok'] ?>" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="min_stok" class="form-label">Minimum Stok</label>
            <input id="min_stok" name="min_stok" value="<?= $result['min_stok'] ?>" required type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis" class="form-label">Jenis Produk</label>
            <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="jenis" name="jenis" class="form-control">
                <?php 
            foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="proses" type="submit" class="btn btn-primary form-control" value="Update" />
        </div>
    </form>
</div>