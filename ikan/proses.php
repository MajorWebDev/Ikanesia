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
    $rating = trim(mysqli_real_escape_string($con, $_POST['rating']));


    if(!in_array($ext,$ekstensi) ) {
        header("location:add.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../_asset/upload_gambar/'.$rand.'_'.$filename);
            mysqli_query($con, "INSERT INTO ikan (gambar, nama, deskripsi, harga, status, rating) VALUES ('$xx','$nama','$deskripsi','$harga','$status','$rating')") or die (mysqli_error($con));
            header("location:add.php?alert=berhasil");
        }else{
            header("location:add.php?alert=gagal_ukuran");
        }
    }
} else if(isset($_POST['edit'])) {
    $id_ikan = trim(mysqli_real_escape_string($con, $_POST['id_ikan']));
    $filename = $_FILES['gambar']['name'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $deskripsi = trim(mysqli_real_escape_string($con, $_POST['deskripsi']));
    $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $rating = trim(mysqli_real_escape_string($con, $_POST['rating']));

    if($filename != "") {
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filebaru = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		
		$sql = "SELECT * FROM ikan WHERE id_ikan='$id_ikan'";
		$query = mysqli_query($con, $sql) or die (mysqli_error());
		$data = mysqli_fetch_array($query);
		$patch = '../_asset/upload_gambar/'.$data['gambar'];
		
        if(!in_array($ext,$ekstensi) ) {
            header("location:edit.php?id_ikan=$id_ikan&alert=gagal_ekstensi");
        } else{
            if($ukuran < 1044070){	
                $xx = $rand.'_'.$filebaru;
                move_uploaded_file($_FILES['gambar']['tmp_name'], '../_asset/upload_gambar/'.$rand.'_'.$filebaru);
                mysqli_query($con, "UPDATE ikan SET gambar = '$xx', nama = '$nama', deskripsi = '$deskripsi', harga = '$harga', status = '$status', rating = '$rating' WHERE id_ikan = '$id_ikan'") or die (mysqli_error($con));
                header("location:edit.php?id_ikan=$id_ikan&alert=berhasil");
				
				if(file_exists($patch)){
				unlink($patch);
				}
            } else{
                header("location:edit.php?id_ikan=$id_ikan&alert=gagal_ukuran");
            }
        }
    } else {
        mysqli_query($con, "UPDATE ikan SET nama = '$nama', deskripsi = '$deskripsi', harga = '$harga', status = '$status', rating = '$rating' WHERE id_ikan = '$id_ikan'") or die (mysqli_error($con));
        header("location:edit.php?id_ikan=$id_ikan&alert=berhasil");
    }
}
?>