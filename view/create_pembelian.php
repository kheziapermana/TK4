<?php
    include("master.php")
?>
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="../controller/create_pembelian_controller.php">
            <legend> Form Input Pembelian </legend>
            <div class="form-group">
                <label for="idPembelian" class="col-md-2">
                    Id Pembelian
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idPembelian" placeholder="Id Pembelian"
                        name="idPembelian">
                </div>
            </div>
            <div class="form-group">
                <label for="Jumlah Pembelian" class="col-md-2">
                    Jumlah Pembelian
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="jumlahPembelian" placeholder="Jumlah Pembelian"
                        name="jumlahPembelian">
                </div>
            </div>
            <div class="form-group">
                <label for="hargaBeli" class="col-md-2">
                    Harga Beli
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="hargaBeli" placeholder="Harga Beli"
                        name="hargaBeli">
                </div>
            </div>
            <div class="form-group">
                <label for="idPengguna" class="col-md-2">
                    Id Pengguna
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idPengguna" placeholder="Id Pengguna"
                        name="idPengguna">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">
                    <input type="submit" class="btn btn-primary" name="createPembelian" value="Create">
                    <a class="btn btn-danger" href="list_pembelian.php" Barang="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>