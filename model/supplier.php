<?php
class Supplier {
    private $IdSupplier;
    private $NamaSupplier;
    private $Alamat;
    private $IdPembelian;
    private $IdBarang;

    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdSupplier ($IdSupplier)
    {
        $this->IdSupplier = $IdSupplier;
    }
    function setNamaSupplier ($NamaSupplier)
    {
        $this->NamaSupplier = $NamaSupplier;
    }
    function setAlamat ($Alamat)
    {
        $this->Alamat = $Alamat;
    }
    function setIdPembelian ($IdPembelian)
    {
        $this->IdPembelian = $IdPembelian;
    }          
    function setIdBarang ($IdBarang)
    {
        $this->IdBarang = $IdBarang;
    }  
    function getIdSupplier ($IdSupplier)
    {
        return $IdSupplier;
    }
    function getNamaSupplier ($NamaSupplier)
    {
        return $NamaSupplier;
    }
    function getAlamat ($Alamat)
    {
        return $Alamat;
    }
    function getIdPembelian ($IdPembelian)
    {
        return $IdPembelian;
    }
    function getIdBarang ($IdBarang)
    {
        return $IdBarang;
    }

    function AddSupplier()
    {
        try {
            $query = "INSERT INTO Supplier (`IdSupplier`, `NamaSupplier`, `Alamat`,`IdPembelian`,`IdBarang`) VALUES (?,?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddSupplier = $prepareDB->execute(
                [
                    $this->IdSupplier,
                    $this->NamaSupplier,
                    $this->Alamat,
                    $this->IdPembelian,
                    $this->IdBarang,
                ]
            );
            return $sqlAddSupplier;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function SupplierList()
    {
        $query = "SELECT * FROM Supplier ORDER BY IdSupplier";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $SupplierList = $prepareDB->fetchAll();
        return $SupplierList;
    }
    function getSupplier($Id)
    {
        try {
            $query = "SELECT * FROM Supplier WHERE IdSupplier = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $Supplierg = $prepareDB->fetchAll();
            return $Supplierg;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function SupplierUpdate()
    {
        try {
            $query = "UPDATE Supplier SET NamaSupplier = ?, Alamat = ? WHERE IdSupplier = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Supplieru = $prepareDB->execute(
                [
                    $this->NamaSupplier,
                    $this->Alamat,
                    $this->IdSupplier,
                ],
            );
            return $Supplieru;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function SupplierDelete($Id)
    {
        try {
            $query = "DELETE FROM Supplier WHERE IdSupplier = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $Supplierd = $prepareDB->execute([$Id]);
            return $Supplierd;
        } catch (Exception $e) {
            throw $e;
        }
    }
}