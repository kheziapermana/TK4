<?php
include("../model/config.php");
include("../model/pembelian.php");
include("../model/penjualan.php");
include("master.php");

$pembelian = new Pembelian($client);
$totalPembelian = (int) $pembelian->HitungTotalPembelian();
$penjualan = new Penjualan($client);
$totalPenjualan = (int) $penjualan->HitungTotalPenjualan();

$keuntungan = $totalPenjualan - $totalPembelian;
if ($keuntungan < 0) {
    $keuntungan = 0;
}

$kerugian = $totalPembelian - $totalPenjualan;
if ($kerugian < 0) {
    $kerugian = 0;
}
?>
<div class="container-fluid">
    <div class="col-md-7 col-md-offset-2">
        <table>
            <tr>
                <th>Keuntungan</th>
                <th>Kerugian</th>
            </tr>
            <tr>
                <td><?php echo($keuntungan); ?></td>
                <td><?php echo($kerugian); ?></td>
            </tr>
        </table>
    </div>
</div>