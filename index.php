<?php
    require_once "_config/config.php";
    include 'header.html';
    include 'content.html';

    if(isset($_SESSION['user'])) {
        echo "<script>window.location='".base_url('dashboard')."';</script>";
    } 
?>