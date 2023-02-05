<?php
include("../model/pembelian.php");
include("../model/config.php");
if (isset($_GET["idPembelian"])) {
    $pembelian = new Pembelian($client);
    $pembelian->PembelianDelete($_GET["idPembelian"]);

    header("location:../view/list_pembelian.php");
    exit();
}
?>