<?php
class Pelanggan {
    private $IdPelanggan;
    private $NamaPelanggan;
    private $qty_barang;
    private $Total;
    private $Alamat;
    private $IdPenjualan;

    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdPelanggan ($IdPelanggan)
    {
        $this->IdPelanggan = $IdPelanggan;
    }
    function setNamaPelanggan ($NamaPelanggan)
    {
        $this->NamaPelanggan = $NamaPelanggan;
    }
    function setqty_barang ($qty_barang)
    {
        $this->qty_barang = $qty_barang;
    }
    function setTotal ($Total)
    {
        $this->Total = $Total;
    }          
    function setAlamat ($Alamat)
    {
        $this->Alamat = $Alamat;
    }  
    function setIdPenjualan ($IdPenjualan)
    {
        $this->IdPenjualan = $IdPenjualan;
    }  
    function getIdPelanggan ($IdPelanggan)
    {
        return $IdPelanggan;
    }
    function getNamaPelanggan ($NamaPelanggan)
    {
        return $NamaPelanggan;
    }
    function getqty_barang ($qty_barang)
    {
        return $qty_barang;
    }
    function getTotal ($Total)
    {
        return $Total;
    }
    function getAlamat ($Alamat)
    {
        return $Alamat;
    }
    function getIdPenjualan ($IdPenjualan)
    {
        return $IdPenjualan;
    }

    function AddPelanggan()
    {
        try {
            $query = "INSERT INTO Pelanggan (`IdPelanggan`, `NamaPelanggan`, `qty_barang`,`Total`,`Alamat`,`IdPenjualan`) VALUES (?,?,?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddPelanggan = $prepareDB->execute(
                [
                    $this->IdPelanggan,
                    $this->NamaPelanggan,
                    $this->qty_barang,
                    $this->Total,
                    $this->Alamat,
                    $this->IdPenjualan,
                ]
            );
            return $sqlAddPelanggan;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PelangganList()
    {
        $query = "SELECT * FROM Pelanggan ORDER BY IdPelanggan";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $PelangganList = $prepareDB->fetchAll();
        return $PelangganList;
    }
    function getPelanggan($Id)
    {
        try {
            $query = "SELECT * FROM Pelanggan WHERE IdPelanggan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $Pelanggang = $prepareDB->fetchAll();
            return $Pelanggang;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PelangganUpdate()
    {
        try {
            $query = "UPDATE Pelanggan SET NamaPelanggan = ?, qty_barang = ?, Total = ?, Alamat = ? WHERE IdPelanggan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Pelangganu = $prepareDB->execute(
                [
                    $this->NamaPelanggan,
                    $this->qty_barang,
                    $this->Total,
                    $this->Alamat,
                    $this->IdPelanggan,
                ],
            );
            return $Pelangganu;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PelangganDelete($Id)
    {
        try {
            $query = "DELETE FROM Pelanggan WHERE IdPelanggan = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Pelanggand = $prepareDB->execute([$Id]);
            return $Pelanggand;
        } catch (Exception $e) {
            throw $e;
        }
    }
}