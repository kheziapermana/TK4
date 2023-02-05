<?php
include("../model/penjualan.php");
include("../model/config.php");

if (isset($_POST["updatePenjualan"])) {
    $penjualan = new Penjualan($client);
    $penjualan->setHargaJual($_POST["hargaJual"]);
    $penjualan->setIdPengguna($_POST["idPengguna"]);
    $penjualan->setIdPenjualan($_POST["idPenjualan"]);
    $penjualan->setJumlahPenjualan($_POST["jumlahPenjualan"]);
    $penjualan->PenjualanUpdate();

    header("location:../view/list_penjualan.php");
    exit();
}
header("location:../view/master.php");
?>