<?php

$base = "/project/fundamental-oop/";
// project base

// incoming URL 
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//param 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// cek url dan tipe request
// str_replace , untuk jika ada space
switch (str_replace('%20', ' ', $request)) {
    case $base:
        require "app/home.php";
        break;
    case $base.'produk' :
        require "app/produk.php";
        break;
    case $base.'produk?id='.$id:
        require "app/detailProduk.php";
        break;
    case $base.'produk/hapus?id='.$id:
        require "app/hapusProduk.php";
        break;
    case $base.'produk/tambah':
        require "app/tambahProduk.php";
        break;
    case $base.'produk/simpan':
        require "app/simpanProduk.php";
        break;
    case $base.'produk/edit?id='.$id:
        require "app/editProduk.php";
        break;
    case $base.'produk/update':
        require "app/updateProduk.php";
        break;
    case ($request==$base.'produk/filter' && $method=='POST'):
        require "app/filterProduk.php";
        break;
    default:
        http_response_code(404);
        echo "404 - NOT FOUND";
        break;
}