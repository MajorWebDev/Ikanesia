<?php
require_once '../_config/config.php';


function rupiah($angka){
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}


if (isset($_GET['search'])) {
    $key = $_GET['search'];
    $sql = "SELECT * FROM ikan WHERE nama LIKE %$key%";
    /*$result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['nama']."<br>";
        
        }
    }*/
    $result = $con->query("SELECT * FROM ikan WHERE nama LIKE '%$key%'");
    if ($result->num_rows > 0) {
        ?>
        <div class="flex flex-head-search">
            <h6>Hasil pencarian dari</h6>
            <h4><?php echo $_GET['search'] ?></h4>
        </div>
        <?php
        foreach($result as $row) {
        ?>
            <div class="search-item">
                <div class="image-item">
                    <img src="_asset/upload_gambar/<?php echo $row['gambar'] ?>" />
            </div>
            <div class="info-item">
                <h4>
                    <?php echo $row['nama'] ?>
                </h4>
                    Harga <?php echo rupiah($row['harga']) ?>
                </div>
            </div>
    <?php
        }   
    }
    else {
        echo "Item tidak ditemukan";
    } 
}
else {
    echo "Tidak ditemukan";
}
?>