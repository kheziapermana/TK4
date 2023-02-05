<?php
include("../model/config.php");
include("../model/penjualan.php");
include("master.php");

$penjualan = new Penjualan($client);
$penjualanList = $penjualan->PenjualanList();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <a href="create_penjualan.php"><button>Create Penjualan</button></a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> Id Penjualan </th>
                        <th> Jumlah Penjualan </th>
                        <th> Harga Jual </th>
                        <th> Id Pengguna </th>
                    </tr>
                        <?php
                        foreach ($penjualanList as $key => $data) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $data["IdPenjualan"] ?>
                                </td>
                                <td>
                                    <?php echo $data["JumlahPenjualan"] ?>
                                </td>
                                <td>
                                    <?php echo $data["HargaJual"] ?>
                                </td>
                                <td>
                                    <?php echo $data["IdPengguna"] ?>
                                </td>

                                <td>
                                    <a href="update_penjualan.php?idPenjualan=<?php echo $data["IdPenjualan"] ?>">
                                        <button type="button" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-pencil">
                                                Edit
                                            </span>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../controller/delete_penjualan_controller.php?idPenjualan=<?php echo $data["IdPenjualan"] ?>">
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