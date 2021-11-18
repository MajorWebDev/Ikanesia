<?php
    //setting default Timezone
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    //koneksi
    $con = mysqli_connect('localhost','root','','ikanesia');
    if(mysqli_connect_errno()) {
        echo mysqli_connect_error();
    }
    //Function Base Url
    function base_url($url = null) {
        $base_url = "http://localhost/Ikanesia";
        if($url != null) {
            return $base_url."/".$url;
        } else {
            return $base_url;
        }
    }
?>