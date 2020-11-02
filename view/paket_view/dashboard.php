<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Portal Pelanggan</title>
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="paketModal" tabindex="-1" aria-labelledby="paketModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paketModalLabel">Form Paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class=container>
      <form method="post" action="../../controller/add_paket.php">
  <div class="form-group">
    <label for="idPaket">Id</label>
    <input name="id_paket" type="text" class="form-control" id="idPaket">
    <label for="namaPaket">Nama Paket</label>
    <input name="nama_paket" type="text" class="form-control"  id="namaPaket">
    <label for="internet">Internet</label>
    <input name="internet" type="text" class="form-control"  id="internet">
    <label for="useeTv">UseeTv</label>
    <input name="useetv" type="text" class="form-control"  id="useeTv">
    <label for="kategori">Kategori</label>
    <input name="kategori" type="text" class="form-control"  id="kategori">
    <label for="price">Price</label>
    <input name="price" type="text" class="form-control"  id="price">
    <label for="pajak">Pajak</label>
    <input name="pajak" type="text" class="form-control"  id="pajak">
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
      <a class="nav-link" href="../langganan_view/dashboard.php">Langganan</a>
      <a class="nav-link" href="dashboard.php">Paket</a>
      <a class="nav-link" href="../report/report.php">Report</a>
    </div>
  </div>
</div>
</nav>

<div class="container ">

<div style="margin-bottom: 40px;">

<h1 style="margin-top: 40px; margin-bottom:40px;">DATA PAKET</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#paketModal">
+ PAKET
</button>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA PAKET</th>
      <th scope="col">INTERNET</th>
      <th scope="col">USEETV</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">PRICE</th>
      <th scope="col">PAJAK</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  include "../../connetion/conn.php";

$request = mysqli_query($conn, "SELECT * FROM paket_db  ORDER BY id_paket DESC");
$no=1;
foreach ($request as $row)
{
  ?>
  
<tr>
<td><?php echo $row['id_paket']; ?></td>
<td><?php echo $row['nama_paket']; ?></td>
<td><?php echo $row['internet']; ?></td>
<td><?php echo $row['useetv']; ?></td>
<td><?php echo $row['kategori']; ?></td>
<td>Rp. <?php echo number_format($row['price'], "0", ",",".");  ?></td>
<td><?php echo $row['pajak']; ?></td>

<td>
<a  class="btn btn-warning btn-sm" href="edit.php?id_paket=<?php echo $row['id_paket']; ?>">Edit</a> 
<a class="btn btn-danger btn-sm" href="../../controller/hapus_paket.php?id_paket=<?php echo $row['id_paket'];?>">Hapus</a>
</td>

  <?php
$no++;
}
?>
  </tbody>
</table>
  </div>
</div>
<script>
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>