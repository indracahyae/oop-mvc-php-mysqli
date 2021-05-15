<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';


// kode back-end
$produk = new Produk();
$datas = $produk->index();

// kiri ke view
echo $twig->render('produk.html.twig', ['datas' => $datas]);
