<?php
include("../model/config.php");
include("../model/barang.php");
include("master.php");

$idBarang = $_GET["idBarang"];

$barang = new Barang($client);
$currentBarang = $barang->getBarangbyId($idBarang);
?>
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="../controller/update_barang_controller.php">
            <legend> Form Update Barang </legend>
            <div class="form-group">
                <label for="idBarang" class="col-md-2">
                    Id Barang
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idBarang" placeholder="Id Barang"
                        name="idBarang" value="<?php echo ($idBarang); ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="namaBarang" class="col-md-2">
                    Nama Barang
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="namaBarang" placeholder="Nama Barang"
                        name="namaBarang" value="<?php echo ($currentBarang["NamaBarang"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-md-2">
                    Keterangan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="keterangan" placeholder="Keterangan"
                        name="keterangan" value="<?php echo ($currentBarang["Keterangan"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="satuan" class="col-md-2">
                    Satuan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="satuan" placeholder="Satuan"
                        name="satuan" value="<?php echo ($currentBarang["Satuan"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="idPengguna" class="col-md-2">
                    Id Pengguna
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idPengguna" placeholder="Id Pengguna"
                        name="idPengguna" value="<?php echo ($currentBarang["IdPengguna"]); ?>">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">
                    <input type="submit" class="btn btn-primary" name="updateBarang" value="Update">
                    <a class="btn btn-danger" href="list_barang.php" Barang="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>