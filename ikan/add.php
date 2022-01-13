<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data Ikan</title>
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
        <small>Tambah Data Ikan</small> | 
        <a href="data.php">Kembali</a>
    </h4>
    <form action="proses.php" enctype="multipart/form-data" method="post">
        Foto Ikan <input type="file" name="gambar" required> <br>
        <label for="ikan">Nama Ikan</label>
        <input type="text" name="nama" id="nama" required autofocus> <br>
        <label for="ikan">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" required> <br>
        <label for="ikan">Harga</label>
        <input type="text" name="harga" id="harga" required> <br>
        <label for="ikan">Status</label>
        <select name="status">
            <option value="Ada">Ada</option>
            <option value="Habis">Habis</option>
        </select>     <br>               
        <label for="ikan">Rating</label>
		<input type="text" name="rating" id="rating"> <br>
        <input type="submit" name="add" value="Simpan">
    </form>    
</body>
</html>