<?php
require_once '../../database/dbkoneksi.php';
$id = $GET['iddel'];
$sql = "DELET FROM produk WHERE id = ?";
$statment = $dbh->prepare($sql);
$stetment->executr([$id]);


header("location: ../../pages/produk/list_produk.php");

?>