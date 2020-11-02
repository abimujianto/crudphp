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

if (isset($_GET['id_pelanggan'])) {

    $id_pelanggan = ($_GET["id_pelanggan"]);

    $query = "SELECT * FROM pelanggan_db WHERE id_pelanggan='$id_pelanggan'";
    $result = mysqli_query($conn, $query);
    

    $data = mysqli_fetch_assoc($result);

        } 
?>
<!-- modal  -->
<div class="container">
<form method="post" action="../../controller/edit_pelanggan.php">
  <div class="form-group">
    <label for="idpelanggan">Id</label>
    <input name="id_pelanggan" type="text" class="form-control" id="idpelanggan" value="<?php echo $data['id_pelanggan']; ?>">
    <label for="nama">Nama</label>
    <input name="nama_pelanggan" type="text" class="form-control"  id="nama" value="<?php echo $data['nama_pelanggan']; ?>">
  </div>

  <div class="form-group">
  <?php
		if($data['jenis_kelamin_pelanggan'] == "Laki-Laki"){
			echo "<input type='radio' name='jenis_kelamin_pelanggan' value='Laki-Laki' checked='checked'> Laki-Laki ";
			echo "<input type='radio' name='jenis_kelamin_pelanggan' value='Perempuan'> Perempuan ";
		}else{
			echo "<input type='radio' name='jenis_kelamin_pelanggan' value='Laki-Laki'> Laki-Laki ";
			echo "<input type='radio' name='jenis_kelamin_pelanggan' value='Perempuan' checked='checked'> Perempuan ";
		}
		?>
</div>

  <div class="form-group">
    <label  for="alamat">Alamat</label>
    <textarea name="alamat_pelanggan" class="form-control" id="alamat" rows="3" ><?php echo $data['alamat_pelanggan']; ?></textarea>
  </div>
  <div class="form-group">
  <label for="telp">Telepon/Hp</label>
    <input name="telpon_pelanggan" type="text" class="form-control" id="telp" value="<?php echo $data['telpon_pelanggan']; ?>">
  </div>
  <div >
  <hr>
       <button type="submit" class="btn btn-primary" >Simpan</button>
      <a class="btn btn-danger" href="dashboard.php">Cancel</a>
      </div>
      <br>
      </div>
</form></div>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
