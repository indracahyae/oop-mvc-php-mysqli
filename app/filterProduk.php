<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';

// kode back-end
$cari = $_POST['cari'];
$produk = new Produk();
$datas = $produk->filter($cari);

// kiri ke view
echo $twig->render('produk.html.twig', ['datas' => $datas]);
