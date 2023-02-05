<?php
include("../model/config.php");
include("../model/barang.php");
include("master.php");

$barang = new Barang($client);
$barangList = $barang->BarangList();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <a href="create_barang.php"><button>Create Barang</button></a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> Id Barang </th>
                        <th> Nama Barang </th>
                        <th> Keterangan </th>
                        <th> Satuan </th>
                        <th> Id Pengguna </th>
                    </tr>
                        <?php
                        foreach ($barangList as $key => $data) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $data["IdBarang"] ?>
                                </td>
                                <td>
                                    <?php echo $data["NamaBarang"] ?>
                                </td>
                                <td>
                                    <?php echo $data["Keterangan"] ?>
                                </td>
                                <td>
                                    <?php echo $data["Satuan"] ?>
                                </td>
                                <td>
                                    <?php echo $data["IdPengguna"] ?>
                                </td>

                                <td>
                                    <a href="update_barang.php?idBarang=<?php echo ($data["IdBarang"]); ?>">
                                        <button type="button" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-pencil">
                                                Edit
                                            </span>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="../controller/delete_barang_controller.php?idBarang=<?php echo ($data["IdBarang"]); ?>">
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