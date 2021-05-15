<?php
// deklarasi kebutuhan
require 'twig.php';
require __DIR__.'/../model/produk.php';

// kode back-end


// kiri ke view
echo $twig->render('tambah-produk.html.twig');
