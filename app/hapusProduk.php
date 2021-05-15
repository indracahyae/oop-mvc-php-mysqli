<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';

// kode back-end
$id = $_GET['id'];
$produk = new Produk();
$data = $produk->hapus($id);

// kiri ke view
header("Location: /project/fundamental-oop/produk");
die();
