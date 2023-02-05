<?php
class HakAkses {
    private $IdAkses;
    private $NamaAkses;
    private $Keterangan;
    private $clientDB;


    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }
    
    function setIdAkses ($IdAkses)
    {
        $this->IdAkses = $IdAkses;
    }
    function setNamaAkses ($NamaAkses)
    {
        $this->NamaAkses = $NamaAkses;
    }
    function setKeterangan ($Keterangan)
    {
        $this->Keterangan = $Keterangan;
    }
    function getIdAkses ($IdAkses)
    {
        return $IdAkses;
    }
    function getNamaAkses ($NamaAkses)
    {
        return $NamaAkses;
    }
    function getKeterangan ($Keterangan)
    {
        return $Keterangan;
    }
    function AddHakAkses ()
    {
        try {
            $query = "INSERT INTO HakAkses (`IdAkses`,`NamaAkses`,`Keterangan`) VALUES (?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddHakAkses = $prepareDB->execute ([$this->IdAkses, $this->NamaAkses, $this->Keterangan]);
            return $sqlAddHakAkses;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function HakAksesList ()
    {
        $query = "SELECT * FROM HakAkses ORDER BY NamaAkses";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $HakAkses = $prepareDB->fetchAll();
        return $HakAkses;
    }
    function getHakAkses ($Id)
    {
        try {
            $query = "SELECT * FROM HakAkses WHERE IdAkses = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $HakAksesg = $prepareDB->fetchAll();
            return $HakAksesg;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function HakAksesUpdate ()
    {
        try {
            $query = "UPDATE HakAkses SET NamaAkses = ?, Keterangan = ? WHERE IdAkses = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $HakAksesu = $prepareDB->execute([$this->NamaAkses, $this->Keterangan, $this->IdAkses]);
            return $HakAksesu;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function HakAksesDelete($Id)
    {
        try {
            $query = "DELETE FROM HakAkses WHERE IdAkses = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $HakAksesd = $prepareDB->execute([$Id]);
            return $HakAksesd;
        } catch (Exception $e) {
            throw $e;
        }
    }
}