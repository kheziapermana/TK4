<?php
include("../model/pembelian.php");
include("../model/config.php");

if (isset($_POST["createPembelian"])) {
    $pembelian = new Pembelian($client);
    $pembelian->setHargaBeli($_POST["hargaBeli"]);
    $pembelian->setIdPengguna($_POST["idPengguna"]);
    $pembelian->setIdPembelian($_POST["idPembelian"]);
    $pembelian->setJumlahPembelian($_POST["jumlahPembelian"]);
    $pembelian->AddPembelian();

    header("location:../view/list_pembelian.php");
    exit();
}
header("location:../view/master.php");
?>