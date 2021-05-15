<?php   

class Database
{
    // deklarasi parameter koneksi database
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "oop_php_mvc";

    public $mysqli = '';

    function __construct(){
        // koneksi ke server MySQL
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);	

        // cek koneksi tersambung atau tidak
        if ($mysqli->connect_error){
            echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
        }  
        
        // bila koneksi berhasil
        $this->mysqli = $mysqli;
    }

}

