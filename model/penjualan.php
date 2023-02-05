<?php
class Penjualan {
    private $IdPenjualan;
    private $JumlahPenjualan;
    private $HargaJual;
    private $IdPengguna;

    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdPenjualan ($IdPenjualan)
    {
        $this->IdPenjualan = $IdPenjualan;
    }
    function setJumlahPenjualan ($JumlahPenjualan)
    {
        $this->JumlahPenjualan = $JumlahPenjualan;
    }
    function setHargaJual ($HargaJual)
    {
        $this->HargaJual = $HargaJual;
    }
    function setIdPengguna ($IdPengguna)
    {
        $this->IdPengguna = $IdPengguna;
    }             
    function getIdPenjualan ($IdPenjualan)
    {
        return $IdPenjualan;
    }
    function getJumlahPenjualan ($JumlahPenjualan)
    {
        return $JumlahPenjualan;
    }
    function getHargaJual ($HargaJual)
    {
        return $HargaJual;
    }
    function getIdPengguna ($IdPengguna)
    {
        return $IdPengguna;
    }

    function AddPenjualan()
    {
        try {
            $query = "INSERT INTO Penjualan (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`) VALUES (?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddPenjualan = $prepareDB->execute(
                [
                    $this->IdPenjualan,
                    $this->JumlahPenjualan,
                    $this->HargaJual,
                    $this->IdPengguna,
                ]
            );
            return $sqlAddPenjualan;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PenjualanList()
    {
        $query = "SELECT * FROM Penjualan ORDER BY IdPenjualan";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $penjualanList = $prepareDB->fetchAll();
        return $penjualanList;
    }
    function getPenjualan($Id)
    {
        try {
            $query = "SELECT * FROM Penjualan WHERE IdPenjualan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $penjualan = $prepareDB->fetch();
            return $penjualan;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PenjualanUpdate()
    {
        try {
            $query = "UPDATE Penjualan SET JumlahPenjualan = ?, HargaJual = ?, IdPengguna = ? WHERE IdPenjualan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $penjualanUpdate = $prepareDB->execute(
                [
                    $this->JumlahPenjualan,
                    $this->HargaJual,
                    $this->IdPengguna,
                    $this->IdPenjualan,
                ],
            );
            return $penjualanUpdate;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PenjualanDelete($Id)
    {
        try {
            $query = "DELETE FROM Penjualan WHERE IdPenjualan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $penjualanDelete = $prepareDB->execute([$Id]);
            return $penjualanDelete;
        } catch (Exception $e) {
            throw $e;
        }
    }

    function HitungTotalPenjualan()
    {
        try {
            $query = "SELECT SUM(HargaJual) as TotalPenjualan FROM penjualan";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetch();
            return $result["TotalPenjualan"];
        } catch (Exception $e) {
            throw $e;
        }
    }
}