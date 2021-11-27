<?php
    if ($_GET['item'] == 1) {
        $nama = "Ikan Baru 1";
        $harga = 199.555;
    }

?>


    <div class="single" id="ikanInfo">
        <div class="container" v-for="i in info">
            <div class="image_post">
                <img v-lazy="'_asset/upload_gambar/'+i.gambar" width="100%">
            </div>
            <div class="info-item">
                <h2>
                    {{ i.nama }}
                </h2>
                <h4>Rating
                    <ion-icon name="star"></ion-icon> 4.5 | Stok Ada
                </h4>
                <br>
                <h2 class="price">
                    {{ rupiah(i.harga) }}
                </h2>
            </div>
            <div class="info-item">
                <h2>Deskripsi Ikan</h2>
                <p>
                    {{ i.deskripsi }}
                </p>
                <div class="button-frame">
                    <a class="button-buy" href="#">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/ikan_info.js"></script>