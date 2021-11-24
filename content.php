<div class="content">
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
                        <?php
                        include 'php/ikan_news.php'
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="flex flex-title">
            <h3>Paling banyak dicari</h3> <a href="#">Lihat Semua <ion-icon name="chevron-forward"></ion-icon></a></div>
        <hr width="230px">
        <div class="flex flex-item-box">
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan1.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 5/5
                </div>
                <div class="info">
                    Ikan Dicari
                    <br><span class="price">Rp. 29.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan2.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 4.8/5
                </div>
                <div class="info">
                    Ikan Dicari 1
                    <br><span class="price">Rp. 25.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan3.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star-half"></ion-icon><br> 4.5/5
                </div>
                <div class="info">
                    Ikan Dicari
                    <br><span class="price">Rp. 23.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
        </div>

        <div class="flex flex-title">
            <h3>Cupang</h3> <a href="#">Lihat Semua <ion-icon name="chevron-forward"></ion-icon></a>
        </div>
        <hr width="150px">
        <div class="flex flex-item-box">
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan1.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 5/5
                </div>
                <div class="info">
                    Ikan Dicari
                    <br><span class="price">Rp. 29.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan2.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star"></ion-icon><br> 4.8/5
                </div>
                <div class="info">
                    Cupang 1
                    <br><span class="price">Rp. 25.773</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/ikan3.png" width="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star-half"></ion-icon><br> 4.5/5
                </div>
                <div class="info">
                    Ikan Dicari
                    <br><span class="price">Rp. 23.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
            <div class="box-item-2">
                <div class="img">
                    <img class="lazy" data-src="img/poster2.png" height="100%">
                </div>
                <div class="rating">
                    <ion-icon name="star-half"></ion-icon><br> 4.5/5
                </div>
                <div class="info">
                    Ikan Dicari
                    <br><span class="price">Rp. 23.777</span>
                    <br>
                    <a href="#">Beli Ikan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/content.js"/></script>