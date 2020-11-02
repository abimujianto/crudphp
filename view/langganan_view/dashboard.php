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


<!-- Modal -->
<div class="modal fade" id="langgananModal" tabindex="-1" aria-labelledby="langgananModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="langgananModalLabel">Form Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class=container>
      <form method="post" action="../../controller/add_langganan.php">
  <div class="form-group">
    <label for="idLangganan">Id</label>
    <input name="id_langganan" type="text" class="form-control" id="idLangganan">
    <label for="pelangganId">Pelanggan Id</label>
    <input name="pelanggan_id" type="text" class="form-control" id="pelangganId">
    <label for="paketId">Paket Id</label>
    <input name="paket_id" type="text" class="form-control" id="paketId">
    <label for="tanggal">Tanggal</label>
    <input name="tanggal" type="text" class="form-control" id="tanggal">
  </div>
  <div >
  <hr>
       <button type="submit" class="btn btn-primary" >Tambah</button>
      </div>
      <br>
      </div>
</form>
      </div>
     
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-link" href="../pelanggan_view/dashboard.php">Pelanggan <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="dashboard.php">Langganan</a>
      <a class="nav-link" href="../paket_view/dashboard.php">Paket</a>
      <a class="nav-link" href="../report/report.php">Report</a>
    </div>
  </div>
</div>
</nav>

<div class="container ">

<div style="margin-bottom: 40px;">

<h1 style="margin-top: 40px; margin-bottom:40px;">DATA LANGGANAN</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#langgananModal">
+ LANGGANAN
</button>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PELANGGAN ID</th>
      <th scope="col">PAKET ID</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  include "../../connetion/conn.php";

$request = mysqli_query($conn, "SELECT * FROM langganan_db  ORDER BY id_langganan DESC");
$no=1;
foreach ($request as $row)
{
  ?>
  
<tr>
<td><?php echo $row['id_langganan']; ?></td>
<td><?php echo $row['paket_id']; ?></td>
<td><?php echo $row['pelanggan_id']; ?></td>
<td><?php echo $row['tanggal']; ?></td>

<td>
<a  class="btn btn-warning btn-sm" href="edit.php?id_langganan=<?php echo $row['id_langganan']; ?>">Edit</a> 
<a class="btn btn-danger btn-sm" href="../../controller/hapus_langganan.php?id_langganan=<?php echo $row['id_langganan'];?>">Hapus</a>
</td>

  <?php
$no++;
}
?>
  </tbody>
</table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
$('#tanggal').datepicker({
    format: 'yyyy-mm-dd'
})
</script>
</body>
</html> 