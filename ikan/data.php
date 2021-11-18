<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Ikanesia</title>
</head>
<body>
    <h1>Ikan</h1>
    <a href="add.php">+ Tambah Data Ikan </a> | <a href="<?=base_url('dashboard')?>"><span class="text-danger">Dashboard</span></a>
    <form class="form-inline" action="" method="post">    
        <input type="text" name="pencarian" placeholder="Pencarian">
        <button type="submit"><span aria-hidden="true">CARI</span></button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No. </th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $batas = 3;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                $posisi = 0;
                $hal = 1;
            } else {
                $posisi = ($hal - 1) * $batas;
            }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if($pencarian != '') {
                        $sql = "SELECT * FROM ikan WHERE nama LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM ikan LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM ikan";
                        $no = $posisi + 1;
                    }
                } else {
                    $query = "SELECT * FROM ikan LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM ikan";
                    $no = $posisi + 1;
                }
                    
                $sql_ikan = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_ikan) > 0) {
                    while($data = mysqli_fetch_array($sql_ikan)) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><img src="../_asset/upload_gambar/<?=$data['gambar']?>" width="50px" height="50px"></td>  
                        <td><?=$data['nama']?></td>
                        <td><?=$data['deskripsi']?></td>
                        <td><?=$data['harga']?></td>
                        <td><?=$data['status']?></td>
                        <td class="text-center">
                        Ubah | 
                        Hapus
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan!</td></tr>";
                }
                ?>
        </tbody>
    </table>
    <?php
        if(@$_POST['pencarian'] == '') { ?>
            <div style="float:left;">
                <?php
                    $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                    echo "Jumlah Data : <b>$jml</b>";                
                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                        $jml_hal = ceil($jml / $batas);
                        for ($i=1; $i <= $jml_hal; $i++) {
                            if($i != $hal) {
                                echo "<li><a href=\"?hal=$i\">$i</a></li>";
                            } else {
                                echo "<li class=\"active\"><a>$i</a></li>";
                            }
                        }
                    ?>
                </ul>
            </div>
            <?php            
        } else { 
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo "Data Hasil Pencarian : <b>$jml</b>";
            echo "<div>";            
        }
        ?>
</body>
</html>