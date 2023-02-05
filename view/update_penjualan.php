<?php
include("master.php");
include("../model/config.php");
include("../model/penjualan.php");

$idPenjualan = $_GET["idPenjualan"];

$penjualan = new Penjualan($client);
$currentPenjualan = $penjualan->getPenjualan($idPenjualan);
?>
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="../controller/update_penjualan_controller.php">
            <legend> Form Update Penjualan </legend>
            <div class="form-group">
                <label for="idPenjualan" class="col-md-2">
                    Id Penjualan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idPenjualan" placeholder="Id Penjualan"
                        name="idPenjualan" value="<?php echo($idPenjualan) ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="Jumlah Penjualan" class="col-md-2">
                    Jumlah Penjualan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="jumlahPenjualan" placeholder="Jumlah Penjualan"
                        name="jumlahPenjualan" value="<?php echo($currentPenjualan["JumlahPenjualan"]) ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="hargaJual" class="col-md-2">
                    Harga Jual
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="hargaJual" placeholder="Harga Jual"
                        name="hargaJual" value="<?php echo($currentPenjualan["HargaJual"]) ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="idPengguna" class="col-md-2">
                    Id Pengguna
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idPengguna" placeholder="Id Pengguna"
                        name="idPengguna" value="<?php echo($currentPenjualan["IdPengguna"]) ?>">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">
                    <input type="submit" class="btn btn-primary" name="updatePenjualan" value="Update">
                    <a class="btn btn-danger" href="list_penjualan.php" Barang="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>