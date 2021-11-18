<?php
require_once "../_config/config.php";

if(isset($_POST['add'])) {
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $deskripsi = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));


    if(!in_array($ext,$ekstensi) ) {
        header("location:add.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../_asset/upload_gambar/'.$rand.'_'.$filename);
            mysqli_query($con, "INSERT INTO ikan (gambar, nama, deskripsi, harga, status) VALUES ('$xx','$nama','$deskripsi','$harga','$status')") or die (mysqli_error($con));
            header("location:add.php?alert=berhasil");
        }else{
            header("location:add.php?alert=gagal_ukuran");
        }
    }
}
?>