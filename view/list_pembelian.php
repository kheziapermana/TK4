<?php
include("../model/config.php");
include("../model/pembelian.php");
include("master.php");

$pembelian = new Pembelian($client);
$pembelianList = $pembelian->PembelianList();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <a href="create_pembelian.php"><button>Create Pembelian</button></a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> Id Pembelian </th>
                        <th> Jumlah Pembelian </th>
                        <th> Harga Beli </th>
                        <th> Id Pengguna </th>
                    </tr>
                        <?php
                        foreach ($pembelianList as $key => $data) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $data["IdPembelian"] ?>
                                </td>
                                <td>
                                    <?php echo $data["JumlahPembelian"] ?>
                                </td>
                                <td>
                                    <?php echo $data["HargaBeli"] ?>
                                </td>
                                <td>
                                    <?php echo $data["IdPengguna"] ?>
                                </td>

                                <td>
                                    <a href="update_pembelian.php?idPembelian=<?php echo ($data["IdPembelian"]); ?>">
                                        <button type="button" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-pencil">
                                                Edit
                                            </span>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../controller/delete_pembelian_controller.php?idPembelian=<?php echo ($data["IdPembelian"]); ?>">
                                        <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash">
                                                Delete
                                            </span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>