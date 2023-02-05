<?php
    include("master.php")
?>
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <form class="form-horizontal" method="post" action="../controller/create_barang_controller.php">
            <legend> Form Input Barang </legend>
            <div class="form-group">
                <label for="idBarang" class="col-md-2">
                    Id Barang
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="idBarang" placeholder="Id Barang"
                        name="idBarang">
                </div>
            </div>
            <div class="form-group">
                <label for="namaBarang" class="col-md-2">
                    Nama Barang
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="namaBarang" placeholder="Nama Barang"
                        name="namaBarang">
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="col-md-2">
                    Keterangan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="keterangan" placeholder="Keterangan"
                        name="keterangan">
                </div>
            </div>
            <div class="form-group">
                <label for="satuan" class="col-md-2">
                    Satuan
                </label>
                <div class="col-md-7">
                    <input required type="text" class="form-control" id="satuan" placeholder="Satuan"
                        name="satuan">
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
                    <input type="submit" class="btn btn-primary" name="createBarang" value="Create">
                    <a class="btn btn-danger" href="list_barang.php" Barang="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>