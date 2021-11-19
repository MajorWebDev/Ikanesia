<?php
require_once '_config/config.php';
include 'header.html';

if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('dashboard')."';</script>";
} 

if (isset($_GET['item'])) {
    if ($_GET['item'] == 1) {
        include 'item/index.php';
    }
    else {
        include 'content.html';
    }
}
else {
    include 'content.html';
}
include 'footer.html';