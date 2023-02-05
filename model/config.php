<?php
class Database
    {
        private $server = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "tk4";

        function koneksidatabase ()
        {
            try {
                // buat koneksi dengan database
                $dbh = new PDO('mysql:host='. $this->server 
            .';dbname='. $this->database, $this->username, $this->password);
            // set error mode
            $dbh->setAttribute( PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION );
            return $dbh;
        }
        catch (PDOException $e) {
            // tampilkan pesan kesalahan jika koneksigagal
            print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

$db = new Database();
$client = $db->koneksidatabase();