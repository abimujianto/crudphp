<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Pelanggan</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-link" href="../pelanggan_view/dashboard.php">Pelanggan <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="../langganan_view/dashboard.php">Langganan</a>
      <a class="nav-link" href="../paket_view/dashboard.php">Paket</a>
      <a class="nav-link" href="../report/report.php">Report</a>
    </div>
  </div>
</div>
</nav>
<?php   include "../../connetion/conn.php";?>
<div class="container">
<form action="report.php" method="get">
<div class="row title">
<div class="col-7"></div>
<div class="col-3">
<input class="form-control col-12" name="search" placeholder="SEARCH" value="<?php
if(isset($_GET['search'])){
 $cari = $_GET['search'];
 echo "$cari";}?>">
</div>
<div class="col-1">
<input class="btn btn-secondary col-12" type="submit" value="Search">
</div>
</div>


<table  class="table table-hover">
<thead>
<tr>
<th>NO</th>
<th>PELANGGAN ID</th>
<th>NAMA PELANGGAN</th>
<th>PAKET ID</th>
<th>NAMA PAKET</th>
<th>KATEGORI</th>
<th>TANGGAL</th>
<th>PRICE</th>
<th>PAJAK</th>
</tr>
</thead>
<tbody>
<?php

if(isset($_GET['search'])){
  $cari = $_GET['search'];
  $result = mysqli_query($conn,"SELECT * FROM pelanggan_db, langganan_db, paket_db WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket AND nama_pelanggan like '%".$cari."%'");    
 }else{
  $result = mysqli_query($conn,"SELECT * FROM pelanggan_db, langganan_db, paket_db WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket ORDER BY id_pelanggan DESC");  
 }
 $no = 1;
 foreach($result as $row){

?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['id_pelanggan']; ?></td>
<td><?php echo $row['nama_pelanggan']; ?></td>
<td><?php echo $row['id_paket']; ?></td>
<td><?php echo $row['nama_paket']; ?></td>
<td><?php echo $row['kategori']; ?></td>
<td><?php echo date("d-m-Y", strtotime($row['tanggal'])); ?></td>
<td>Rp.<?php echo number_format($row['price'], '0', ',', '.')?></td> 
<td><?php echo $row['pajak']; ?></td>
</tr>

<?php
$no++;
}
?>
</tbody>
</table>


<?php 
$query = mysqli_query($conn, "SELECT SUM(price + (price*0.1)) AS total FROM pelanggan_db, langganan_db, paket_db WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket") or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
?>

<div class="row title">
<div class="col-10 text-right">Total = Rp. <?php echo number_format($fetch['total'], '0', ',', '.')?>
</div>
</div>
</div>

</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</body>
</html>