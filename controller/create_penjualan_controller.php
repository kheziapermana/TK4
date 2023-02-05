<?php
include("../model/penjualan.php");
include("../model/config.php");

if (isset($_POST["createPenjualan"])) {
    $penjualan = new Penjualan($client);
    $penjualan->setHargaJual($_POST["hargaJual"]);
    $penjualan->setIdPengguna($_POST["idPengguna"]);
    $penjualan->setIdPenjualan($_POST["idPenjualan"]);
    $penjualan->setJumlahPenjualan($_POST["jumlahPenjualan"]);
    $penjualan->AddPenjualan();

    header("location:../view/list_penjualan.php");
    exit();
}
header("location:../view/master.php");
?>