<div class="content" id="content">
    <div class="left">
        <div class="flex flex-box">
            <div class="slider-box">
                <img src="img/poster1.png">
                <div class="overlay">
                    <span class="title">IkaNesia Promo</span>
                </div>
            </div>
            <div class="slider-box">
                <img src="img/poster2.png">
                <div class="overlay">
                    <span class="title">IkaNesia Promo 2</span>
                </div>
            </div>
            <div class="slider-box">
                <img src="img/poster3.png">
                <div class="overlay">
                    <span class="title">IkaNesia Promo 3</span>
                </div>
            </div>
            <div class="slider-pagging">
                <span class="pagging-shape" onclick="currentDiv(1)"></span>
                <span class="pagging-shape" onclick="currentDiv(2)"></span>
                <span class="pagging-shape" onclick="currentDiv(3)"></span>
            </div>
        </div>

        <h3>Terbaru, nih</h3>
        <hr width="200px">
        <br>
        <div class="spliderbox">
            <div class="splide splide_news">
                <div class="splide__track">
                    <ul class="splide__list splide_news_list" style="height: 23em; padding-top: 2em;">
                        <?php include 'php/ikan_news.php'; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="flex flex-title">
            <h3>Paling banyak dicari</h3> <a href="#">Lihat Semua <ion-icon name="chevron-forward"></ion-icon></a></div>
        <hr width="230px">
        <div class="flex flex-item-box" id="mostReachedIkan">
            <div class="box-item-2" v-for="d in info.slice(0, 4)">
                <div class="img">
                    <img v-lazy="'_asset/upload_gambar/'+d.gambar">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 5/5
                </div>
                <div class="info">
                    {{ d.nama }}
                    <br><span class="price">{{ rupiah(d.harga) }}</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
        </div>

        <div class="flex flex-title">
            <h3>Cupang</h3> <a href="#">Lihat Semua <ion-icon name="chevron-forward"></ion-icon></a>
        </div>
        <hr width="150px">
        <div class="flex flex-item-box" id="cupang">
            <div class="box-item-2" v-for="d in info.slice(0, 4)">
                <div class="img">
                    <img v-lazy="'_asset/upload_gambar/'+d.gambar">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 5/5
                </div>
                <div class="info">
                    {{ d.nama }}
                    <br><span class="price">{{ rupiah(d.harga) }}</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/content.js" /></script>
<script src="js/ikan_mostreached.js"></script>
<script src="js/ikan_cupang.js"></script>