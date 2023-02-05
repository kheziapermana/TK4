<?php
class Barang {
    private $IdBarang;
    private $NamaBarang;
    private $Keterangan;
    private $Satuan;
    private $IdPengguna;
    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdBarang ($IdBarang)
    {
        $this->IdBarang = $IdBarang;
    }
    function setNamaBarang ($NamaBarang)
    {
        $this->NamaBarang = $NamaBarang;
    }
    function setKeterangan ($Keterangan)
    {
        $this->Keterangan = $Keterangan;
    }
    function setSatuan ($Satuan)
    {
        $this->Satuan = $Satuan;
    }
    function setIdPengguna ($IdPengguna)
    {
        $this->IdPengguna = $IdPengguna;
    }             
    function getIdBarang ($IdBarang)
    {
        return $IdBarang;
    }
    function getNamaBarang ($NamaBarang)
    {
        return $NamaBarang;
    }
    function getKeterangan ($Keterangan)
    {
        return $Keterangan;
    }
    function getSatuan ($Satuan)
    {
        return $Satuan;
    }
    function getIdPengguna ($IdPengguna)
    {
        return $IdPengguna;
    }
    function AddBarang ()
    {
        try {
            $query = "INSERT INTO Barang (`IdBarang`,`NamaBarang`,`Keterangan`,`Satuan`,`IdPengguna`) VALUES (?,?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddBarang = $prepareDB->execute ([$this->IdBarang, $this->NamaBarang, $this->Keterangan, $this->Satuan, $this->IdPengguna]);
            return $sqlAddBarang;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function BarangList ()
    {
        $query = "SELECT * FROM Barang ORDER BY NamaBarang";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $BarangList = $prepareDB->fetchAll();
        return $BarangList;
    }
    function getBarangbyId ($Id)
    {
        try {
            $query = "SELECT * FROM Barang WHERE IdBarang = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $getBarangbyId = $prepareDB->fetch();
            return $getBarangbyId;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function BarangUpdate ()
    {
        try {
            $query = "UPDATE Barang SET NamaBarang = ?, Keterangan = ?, Satuan = ?, IdPengguna = ? WHERE IdBarang = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $BarangUpdate = $prepareDB->execute([$this->NamaBarang, $this->Keterangan, $this->Satuan, $this-> IdPengguna, $this-> IdBarang]);
            return $BarangUpdate;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function BarangDelete ($Id)
    {
        try {
            $query = "DELETE FROM Barang WHERE IdBarang = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $BarangDelete = $prepareDB->execute([$Id]);
            return $BarangDelete;
        } catch (Exception $e) {
            throw $e;
        }
    }
}