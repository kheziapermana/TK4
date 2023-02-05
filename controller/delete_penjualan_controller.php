<?php
include("../model/penjualan.php");
include("../model/config.php");
if (isset($_GET["idPenjualan"])) {
    $penjualan = new Penjualan($client);
    $penjualan->PenjualanDelete($_GET["idPenjualan"]);

    header("location:../view/list_penjualan.php");
    exit();
}
?>