<?php

if(isset($_GET['mod'])){
	$page = $_GET['mod'];
	
	switch($page) {
		case "formproduk":
		include "page/formproduk.php";
		break;
		case "list":
		include "page/list.php";
		break;
		
	}
	}else{
		echo "module tidak ditemukan";
	}