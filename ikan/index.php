<?php include_once('../dashboard/_header.php'); ?>
    <div class="box">
        <h1>Ikan</h1>
        <h4>
            <small>Data Ikan</small>
            <div class="float-right">
                <a href="" class="btn btn-default btn-xs"><i class="fa fa-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Tambah Data Ikan</a>
            </div>
        </h4>
        <div style="margin-bottom :40px;">
            <form class="form-inline" action="" method="post">
                <div class="form-group">    
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true">CARI</span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Rating</th>
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $batas = 10;
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
                                <td><?=$data['rating']?></td>
                                <td class="text-center">
                                <a href="edit.php?id_ikan=<?=$data['id_ikan']?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
                                <a href="delete.php?id_ikan=<?=$data['id_ikan']?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i></a>
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
        </div>
        <?php
            if(@$_POST['pencarian'] == '') { ?>
                <div style="float:left;">
                    <?php
                        $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                        echo "Jumlah Data : <b>$jml</b>";                
                    ?>
                </div>
                <div style="float:right;">
                    <ul class="pagination" style="margin:0">
                        <?php
                            $jml_hal = ceil($jml / $batas);
                            for ($i=1; $i <= $jml_hal; $i++) {
                                if($i != $hal) {
                                    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?hal=$i\">$i</a></li>";
                                } else {
                                    echo "<li class=\"page-item\"><a class=\"page-link\">$i</a></li>";
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
    </div>
<?php include_once('../dashboard/_footer.php'); ?>