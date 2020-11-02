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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class=container>
      <form method="post" action="../../controller/add_pelanggan.php">
  <div class="form-group">
    <label for="idpelanggan">Id</label>
    <input name="id_pelanggan" type="text" class="form-control" id="idpelanggan">
    <label for="nama">Nama</label>
    <input name="nama_pelanggan" type="text" class="form-control"  id="nama">
  </div>
  <div class="form-group">
<input type="radio" name="jenis_kelamin_pelanggan" value="Laki-laki"> Laki-laki
<input type="radio" name="jenis_kelamin_pelanggan" value="Perempuan"> Perempuan
</div>
  <div class="form-group">
    <label  for="alamat">Alamat</label>
    <textarea name="alamat_pelanggan" class="form-control" id="alamat" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="telp">Telepon/Hp</label>
    <input name="telpon_pelanggan" type="text" class="form-control" id="telp">
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
      <a class="nav-link" href="dashboard.php">Pelanggan <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="../langganan_view/dashboard.php">Langganan</a>
      <a class="nav-link" href="../paket_view/dashboard.php">Paket</a>
      <a class="nav-link" href="../report/report.php">Report</a>
    </div>
  </div>
</div>
</nav>
<div class="container ">
<div style="margin-bottom: 40px;">
<h1 style="margin-top: 40px; margin-bottom:40px;">DATA PELANGGAN</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
+ PELANGGANAN
</button>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">TELPON</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  include "../../connetion/conn.php";

$request = mysqli_query($conn, "SELECT * FROM pelanggan_db  ORDER BY id_pelanggan DESC");
$no=1;
foreach ($request as $row)
{
  ?>
  
<tr>
<td><?php echo $row['id_pelanggan']; ?></td>
<td><?php echo $row['nama_pelanggan']; ?></td>
<td><?php echo $row['jenis_kelamin_pelanggan']; ?></td>
<td><?php echo $row['alamat_pelanggan']; ?></td>
<td><?php echo $row['telpon_pelanggan']; ?></td>
<td>

<a  class="btn btn-warning btn-sm" href="edit.php?id_pelanggan=<?php echo $row['id_pelanggan']; ?>">Edit</a> 
<a class="btn btn-danger btn-sm" href="../../controller/hapus_pelanggan.php?id_pelanggan=<?php echo $row['id_pelanggan'];?>">Hapus</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>