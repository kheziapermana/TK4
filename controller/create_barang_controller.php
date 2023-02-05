<?php
include("../model/barang.php");
include("../model/config.php");

if (isset($_POST["createBarang"])) {
    $barang = new Barang($client);
    $barang->setIdBarang($_POST["idBarang"]);
    $barang->setNamaBarang($_POST["namaBarang"]);
    $barang->setKeterangan($_POST["keterangan"]);
    $barang->setSatuan($_POST["satuan"]);
    $barang->setIdPengguna($_POST["idPengguna"]);
    $barang->AddBarang();

    header("location:../view/list_barang.php");
    exit();
}
?>