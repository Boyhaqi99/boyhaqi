<?php 
		$id = "";
		$NamaProduk="";
		$Harga="";
		$Qty="";
		$action ="proses/produk_add.php";
		if(isset($_GET['id'])) {
		$id = $_GET['id'];
		include"proses/koneksi.php";
		$query = "select * from produk where IDProduk ='".$id."'";
		$row = mysql_query($query);
		$res = mysql_fetch_array($row);
		$NamaProduk = $res['NamaProduk'];
		$Harga= $res['Harga'];
		$Qty= $res['Qty'];
		$action ="proses/produk_update.php";
		
		}

?>

<form class="from-horizontal" method= "POST" action="<?php echo $action; ?>" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $id; ?>" name="id">
  <div class="form-group">
    <label class="control-label col-sm-4">Nama Produk :</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo $NamaProduk; ?>" placeholder="Nama Produk" name="Nama" >
  </div>
  </div>
  
  <div class="form-group">
   <label class="control-label col-sm-2">Harga :</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo $Harga; ?>"  placeholder="Harga" name="Harga">
  </div>
   </div> 
  
  <div class="form-group">
   <label class="control-label col-sm-2">Qty / Stok :</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo $Qty; ?>"  placeholder="Qty" name="Qty">
  </div>
   </div>
  
    <div class="form-group">
   <label class="control-label col-sm-2">Gambar :</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="gambar">
  </div>
   </div>
   
  <button type="reset" class="btn btn-danger">Batal</button>
   <button type="submit" class="btn btn-primary">Simpan</button>
</form>