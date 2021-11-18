<?php
    if ($_GET['item'] == 1) {
        $nama = "Ikan Baru 1";
        $harga = 199.555;
    }

?>


    <div class="single">
        <div class="container">
            <h2><?php echo $nama ?></h2>
            <h4>Harga : <?php echo $harga ?></h4>
            <div class="image_post">
                <img src="img/ikan1.png" width="100%">
            </div>
        </div>
    </div>