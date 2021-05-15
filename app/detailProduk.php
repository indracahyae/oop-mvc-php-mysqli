<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';


// kode back-end
$id = $_GET['id'];
$produk = new Produk();
$data = $produk->get($id);

$user= '';

// kiri ke view
echo $twig->render('detail-produk.html.twig', ['data' => mysqli_fetch_object($data), 'detail_user'=> $user]);
