<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <title>Portal Pelanggan</title>
</head>
<body>

  <div  class="container-fluid">
  <?php
  
  include "../../connetion/conn.php";

if (isset($_GET['id_langganan'])) {

    $id = ($_GET["id_langganan"]);

    $query = "SELECT * FROM langganan_db WHERE id_langganan='$id'";
    $result = mysqli_query($conn, $query);

    $res = mysqli_fetch_assoc($result);
        } 
?>

  <div class="container">
  <form method="post" action="../../controller/edit_langganan.php">
  <div class="form-group">
    <label for="idLangganan">Id</label>
    <input name="id_langganan" type="text" class="form-control" id="idLangganan" value="<?php echo $res['id_langganan'];?>">
    <label for="pelangganId">Pelanggan Id</label>
    <input name="pelanggan_id" type="text" class="form-control" id="pelangganId" value="<?php echo $res['pelanggan_id'];?>">
    <label for="paketId">Paket Id</label>
    <input name="paket_id" type="text" class="form-control" id="paketId" value="<?php echo $res['paket_id'];?>">
    <label for="tanggal">Tanggal</label>
    <input name="tanggal" type="text" class="form-control" id="tanggal" value="<?php echo $res['tanggal'];?>">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
$('#tanggal').datepicker({
    format: 'yyyy-mm-dd'
})
</script>
</body>
</html>
