<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Portal Pelanggan</title>
</head>
<body>

  <div  class="container-fluid">
  <?php
  
  include "../../connetion/conn.php";

if (isset($_GET['id_paket'])) {

    $id_paket = ($_GET["id_paket"]);

    $query = "SELECT * FROM paket_db WHERE id_paket='$id_paket'";
    $result = mysqli_query($conn, $query);

    $res = mysqli_fetch_assoc($result);
        } 
?>

  <div class="container">
  <form method="post" action="../../controller/edit_paket.php">
  <div class="form-group">
    <label for="idPaket">Id</label>
    <input name="id_paket" type="text" class="form-control" id="idPaket" value="<?php echo $res['id_paket'];?>"> 
    <label for="namaPaket">Nama Paket</label>
    <input name="nama_paket" type="text" class="form-control"  id="namaPaket" value="<?php echo $res['nama_paket'];?>">
    <label for="internet">Internet</label>
    <input name="internet" type="text" class="form-control"  id="internet" value="<?php echo $res['internet'];?>">
    <label for="useeTv">UseeTv</label>
    <input name="useetv" type="text" class="form-control"  id="useeTv" value="<?php echo $res['useetv'];?>">
    <label for="kategori">Kategori</label>
    <input name="kategori" type="text" class="form-control"  id="kategori" value="<?php echo $res['kategori'];?>"> 
    <label for="price">Price</label>
    <input name="price" type="text" class="form-control"  id="price" value="<?php echo $res['price'];?>">
    <label for="pajak">Pajak</label>
    <input name="pajak" type="text" class="form-control"  id="pajak" value="<?php echo $res['pajak'];?>">
  </div>
  <div >
  <hr>
  <button type="submit" class="btn btn-primary" >Simpan</button>
      <a class="btn btn-danger" href="dashboard.php">Cancel</a>
      </div>
      <br>
      </div>
</form>

  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
