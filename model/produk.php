<?php

require "db.php";

class Produk 
{

    private $mysqli = '';

    function __construct()
    {
        $db = new Database();
        $this->mysqli = $db->mysqli;
    }

    // select all
    public function index()
    {
        
        $sql = "SELECT * FROM produk ORDER BY id DESC";
        
        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }

    // select one
    public function get($id)
    {
        $sql = "SELECT * FROM produk WHERE id={$id} ORDER BY id DESC";

        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }

    public function simpan($val)
    {

        $sql = "INSERT INTO produk (nama, deskripsi, foto, harga, diskon, stok, kategori, created_at, updated_at)
                VALUES ('$val->nama', '$val->deskripsi', '$val->foto', $val->harga, $val->diskon, $val->stok, $val->kategori, '$val->created_at', '$val->updated_at')";
        
        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }

    public function update($id, $val)
    {
        $sql = "UPDATE produk
                SET nama='$val->nama', deskripsi='$val->deskripsi', foto='$val->foto', harga=$val->harga, diskon=$val->diskon, stok=$val->stok, kategori=$val->kategori, updated_at='$val->updated_at'
                WHERE id=$id";
        
        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM produk WHERE id={$id}";
        
        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }

    public function filter($cari)
    {
        $sql = "SELECT * FROM produk WHERE nama LIKE '%{$cari}%' OR deskripsi LIKE '%{$cari}%' ";
        
        // error handling
        if ($result = $this->mysqli->query($sql)) {
            $this->mysqli->close();
        }else {
            echo $this->mysqli->error;
            die();
        }

        return $result;
    }
}
