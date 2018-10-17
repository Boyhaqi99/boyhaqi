<?php
include"koneksi.php";

$id = $_POST['id'];
$NamaProduk = $_POST['Nama'];
$Harga = $_POST['Harga'];
$Qty = $_POST['Qty'];

$query = "UPDATE produk SET
		NamaProduk='$NamaProduk',
		Harga=$Harga,
		Qty=$Qty
		WHERE IDProduk='$id'";
		mysql_query($query);
		echo $query;
		
		header("location:../index.php?mod=list");