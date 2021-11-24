<?php


$sql = "SELECT * FROM ikan";
$result = $con->query($sql);

function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    ?>
    <li class="splide__slide">
        <div class="box-item">
            <div class="image">
                <img class="lazy" data-src="<?php echo "_asset/upload_gambar/".$row['gambar'] ?>">
            </div>
            <h4><?php echo $row['nama'] ?></h4>
            <h3><?php echo rupiah($row['harga']) ?></h3>

            <div class="flex flex-box-button">
                <button class="fav"><img src="img/ico/heart.svg" style="width: 24px;"></button>
                <a class="buy" href="?item=1">Beli Ikan</a>
            </div>
        </div>
    </li>
    <?php
    }
} else {
    echo "0 results";
}

?>