<?php
require_once '../_config/config.php';


function rupiah($angka){
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}


if (isset($_GET['search'])) {
    $key = $con -> real_escape_string(preg_replace('/\s/', ' ',$_GET['search']));
    $sql = "SELECT * FROM ikan WHERE nama LIKE %$key%";
    /*$result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['nama']."<br>";
        
        }
    }*/
    $result = $con->query("SELECT * FROM ikan WHERE nama LIKE '%$key%' LIMIT 5");
    if ($result->num_rows > 0) {
        ?>
        <div class="flex flex-head-search">
            <h6>Hasil pencarian dari</h6>
            <h4><?php echo $_GET['search'] ?></h4>
        </div>
        <?php
        foreach($result as $row) {
        ?>
            <a href="?item=<?php echo $row['id_ikan'] ?>">
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
            </a>
            <?php
        }
        if ($result->num_rows == 5) {
            echo "<a href='#' class='search-item-more'>Lihat Lainnya</a>";
        }   
    }
    else {
        ?>
        <div class="not-found">
            <img src='img/ico/search-not-found.svg'>
            <p id='not-found'>Mohon maaf, Hasil tidak ditemukan</p>
        </div>
        <?php
    } 
}
else {
    echo "Tidak ditemukan";
}
?>
