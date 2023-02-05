<?php
include("../model/barang.php");
include("../model/config.php");
if (isset($_GET["idBarang"])) {
    $barang = new Barang($client);
    $barang->BarangDelete($_GET["idBarang"]);

    header("location:../view/list_barang.php");
    exit();
}
?>