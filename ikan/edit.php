<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('../auth/login.php')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data Ikan</title>
</head>
<body>
    <?php 
        if(isset($_GET['alert'])){
            if($_GET['alert']=='gagal_ekstensi'){
    ?>
                <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                <h4>Peringatan !</h4>
                Ekstensi Tidak Diperbolehkan							
    <?php
            }elseif($_GET['alert']=="gagal_ukuran"){
    ?>
                <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                <h4>Peringatan !</h4>
                Ukuran File terlalu Besar							
    <?php
            }elseif($_GET['alert']=="berhasil"){
    ?>
                <button type="button" data-dismiss="alert" aria-hidden="true">Close X</button>
                <h4>Success</h4>
                Berhasil Disimpan								
    <?php
        }
	}
    ?>

    <h1>Data Ikan</h1>
    <h4>
        <small>Edit Data Ikan</small>
        <div class="pull-right">
            <a href="data.php">Kembali</a>
        </div>
    </h4>        
    <?php
        $id = @$_GET['id_ikan'];
        $sql_ikan = mysqli_query($con, "SELECT * FROM ikan WHERE id_ikan = '$id'") or die (mysqli_error($con));
        $data = mysqli_fetch_array($sql_ikan);
    ?>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <label for="ikan">Gambar Ikan</label> <br>
        <img src="../_asset/upload_gambar/<?=$data['gambar']?>" width="50px" height="50px"></td> <br>
        <input type="file" name="gambar"> <br>
        <em>Abaikan jika tidak merubah gambar produk</em> <br>
        <label for="ikan">ID</label>
        <input type="text" name="id_ikan" id="id_ikan" value="<?=$data['id_ikan']?>" readonly> <br>
        <label for="ikan">Nama</label>
        <input type="text" name="nama" id="nama" value="<?=$data['nama']?>" required> <br>
        <label for="ikan">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" value="<?=$data['deskripsi']?>" required> <br>
        <label for="ikan">Harga</label>
        <input type="text" name="harga" id="harga" value="<?=$data['harga']?>" required> <br>
        <label for="ikan">Status</label>
        <select name="status">
            <?php
                if ($data['status'] === Ada) { ?>
                    <option value="Ada">Ada</option>
                    <option value="Habis">Habis</option> <?php
                } else { ?>
                    <option value="Habis">Habis</option>
                    <option value="Ada">Ada</option> <?php
                }
            ?>
        </select>
        <div class="pull-right">
            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</body>
</html>