<?php
    //setting default Timezone
    header("Access-Control-Allow-Origin: *");
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    //koneksi
    $con = mysqli_connect('be1x3hctw7lyrksp3fb3-mysql.services.clever-cloud.com','ur92hlofdmydyd8a','TbSxI9wsz3MvBEPUXHiZ','be1x3hctw7lyrksp3fb3');
    if(mysqli_connect_errno()) {
        echo mysqli_connect_error();
    }
    //Function Base Url
    function base_url($url = null) {
        $base_url = "https://adminmfstore.cleverapps.io";
        if($url != null) {
            return $base_url."/".$url;
        } else {
            return $base_url;
        }
    }
?>