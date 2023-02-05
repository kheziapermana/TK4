<?php
class Pembelian
{
    private $IdPembelian;
    private $JumlahPembelian;
    private $HargaBeli;
    private $IdPengguna;
    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdPembelian($IdPembelian)
    {
        $this->IdPembelian = $IdPembelian;
    }
    function setJumlahPembelian($JumlahPembelian)
    {
        $this->JumlahPembelian = $JumlahPembelian;
    }
    function setHargaBeli($HargaBeli)
    {
        $this->HargaBeli = $HargaBeli;
    }
    function setIdPengguna($IdPengguna)
    {
        $this->IdPengguna = $IdPengguna;
    }
    function getIdPembelian($IdPembelian)
    {
        return $IdPembelian;
    }
    function getJumlahPembelian($JumlahPembelian)
    {
        return $JumlahPembelian;
    }
    function getHargaBeli($HargaBeli)
    {
        return $HargaBeli;
    }
    function getIdPengguna($IdPengguna)
    {
        return $IdPengguna;
    }
    function AddPembelian()
    {
        try {
            $query = "INSERT INTO Pembelian (`IdPembelian`,`JumlahPembelian`,`HargaBeli`, `IdPengguna`) VALUES (?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddPembelian = $prepareDB->execute([$this->IdPembelian, $this->JumlahPembelian, $this->HargaBeli, $this->IdPengguna]);
            return $sqlAddPembelian;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PembelianList()
    {
        $query = "SELECT * FROM Pembelian ORDER BY IdPembelian";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $Pembelianl = $prepareDB->fetchAll();
        return $Pembelianl;
    }
    function getPembelian($Id)
    {
        try {
            $query = "SELECT * FROM Pembelian WHERE IdPembelian = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $Pembeliang = $prepareDB->fetch();
            return $Pembeliang;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PembelianUpdate()
    {
        try {
            $query = "UPDATE Pembelian SET JumlahPembelian = ?, HargaBeli = ?, IdPengguna = ? WHERE IdPembelian = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Pembelianu = $prepareDB->execute([$this->JumlahPembelian, $this->HargaBeli, $this->IdPengguna, $this->IdPembelian]);
            return $Pembelianu;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PembelianDelete($Id)
    {
        try {
            $query = "DELETE FROM Pembelian WHERE IdPembelian = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Pembeliand = $prepareDB->execute([$Id]);
            return $Pembeliand;
        } catch (Exception $e) {
            throw $e;
        }
    }

    function HitungTotalPembelian()
    {
        try {
            $query = "SELECT SUM(HargaBeli) AS TotalPembelian FROM pembelian";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetch();
            return $result["TotalPembelian"];
        } catch (Exception $e) {
            throw $e;
        }
    }
}