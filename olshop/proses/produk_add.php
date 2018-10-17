<?php

include "koneksi.php";
$IDProduk	=getAutoId('IDProduk', 'produk', 'PRD');
$NamaProduk	= $_POST['Nama'];
$Harga		= $_POST['Harga'];
$Qty		= $_POST['Qty'];

$namaFile = $_FILES['gambar'] ['name'];
$namasementara = $_FILES['gambar'] ['tmp_name'];
$dirUpload = "../gambar/";

$terupload = move_uploaded_file($namasementara, $dirUpload.$namaFile);

$Gambar		= "gambar/".$namaFile;


$query ="INSERT INTO `produk`
			(`IDProduk`, `NamaProduk`, `Harga`, `Qty`, `Gambar`)
			VALUES ('$IDProduk', '$NamaProduk', '$Harga', '$Qty', '$Gambar')";
			
		
mysql_query ($query);

header ("location:../index.php?mod=formproduk");

