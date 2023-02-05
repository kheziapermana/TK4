<?php
class Pengguna {
    private $IdPengguna;
    private $NamaPengguna;
    private $Password;
    private $NamaDepan;
    private $NamaBelakang;
    private $NoHp;
    private $Alamat;
    private $IdAkses;

    private $clientDB;

    public function __construct(\PDO $clientDB) {
        $this->clientDB = $clientDB;
    }

    function setIdPengguna ($IdPengguna)
    {
        $this->IdPengguna = $IdPengguna;
    }
    function setNamaPengguna ($NamaPengguna)
    {
        $this->NamaPengguna = $NamaPengguna;
    }
    function setPassword ($Password)
    {
        $this->Password = $Password;
    }
    function setNamaDepan ($NamaDepan)
    {
        $this->NamaDepan = $NamaDepan;
    }        
    function setNamaBelakang ($NamaBelakang)
    {
        $this->NamaBelakang = $NamaBelakang;
    }        
    function setNoHp ($NoHp)
    {
        $this->NoHp = $NoHp;
    }        
    function setAlamat ($Alamat)
    {
        $this->Alamat = $Alamat;
    }
    function setIdAkses ($IdAkses)
    {
        $this->IdAkses = $IdAkses;
    }
    function getIdPengguna ($IdPengguna)
    {
        return $IdPengguna;
    }
    function getNamaPengguna ($NamaPengguna)
    {
        return $NamaPengguna;
    }
    function getPassword ($Password)
    {
        return $Password;
    }
    function getNamaDepan ($NamaDepan)
    {
        return $NamaDepan;
    }
    function getNamaBelakang ($NamaBelakang)
    {
        return $NamaBelakang;
    }
    function getNoHp ($NoHp)
    {
        return $NoHp;
    }
    function getAlamat ($Alamat)
    {
        return $Alamat;
    }
    function getIdAkses ($IdAkses)
    {
        return $IdAkses;
    }

    function AddPengguna()
    {
        try {
            $query = "INSERT INTO Pengguna (`IdPengguna`,`NamaPengguna`,`Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES (?,?,?,?,?,?,?,?)";
            $prepareDB = $this->clientDB->prepare($query);
            $sqlAddPengguna = $prepareDB->execute(
                [
                    $this->IdPengguna,
                    $this->NamaPengguna,
                    $this->Password,
                    $this->NamaDepan,
                    $this->NamaBelakang,
                    $this->NoHp,
                    $this->Alamat,
                    $this->IdAkses,
                ]
            );
            return $sqlAddPengguna;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PenggunaList()
    {
        $query = "SELECT * FROM Pengguna ORDER BY NamaPengguna";
        $prepareDB = $this->clientDB->prepare($query);
        $prepareDB->execute();
        $penggunaList = $prepareDB->fetchAll();
        return $penggunaList;
    }
    function getPengguna($Id)
    {
        try {
            $query = "SELECT * FROM Pengguna WHERE IdPengguna = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $prepareDB->execute([$Id]);
            $pengguna = $prepareDB->fetchAll();
            return $pengguna;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PenggunaUpdate()
    {
        try {
            $query = "UPDATE Pengguna SET NamaPengguna = ?, Password = ?, NamaDepan = ?, NamaBelakang = ?, NoHp = ?, Alamat = ?, IdAkses = ? WHERE IdPengguna = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $penggunaUpdate = $prepareDB->execute(
                [
                    $this->NamaPengguna,
                    $this->Password,
                    $this->NamaDepan,
                    $this->NamaBelakang,
                    $this->NoHp,
                    $this->Alamat,
                    $this->IdAkses,
                    $this->IdPengguna,
                ],
            );
            return $penggunaUpdate;
        } catch (Exception $e) {
            throw $e;
        }
    }
    function PembelianDelete($Id)
    {
        try {
            $query = "DELETE FROM Pengguna WHERE IdPengguna = ?";
            $prepareDB = $this->clientDB->prepare($query);
            $penggunaDelete = $prepareDB->execute([$Id]);
            return $penggunaDelete;
        } catch (Exception $e) {
            throw $e;
        }
    }
}