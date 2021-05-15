<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';

// kode back-end
$val = new StdClass();
$val->nama = $_POST['nama'];
$val->deskripsi = $_POST['deskripsi'];
$val->harga = $_POST['harga'];
$val->diskon = $_POST['diskon']; 
$val->stok = $_POST['stok'];
$val->foto = $_FILES['foto']['name'];
$val->kategori = $_POST['kategori'];
$val->created_at = date('Y-m-d H:i:s');
$val->updated_at = date('Y-m-d H:i:s');

$produk = new Produk();
$datas = $produk->simpan($val);

// UPLOAD FILE HERE
// ...

// kiri ke view
header("Location: /project/fundamental-oop/produk");
die();
