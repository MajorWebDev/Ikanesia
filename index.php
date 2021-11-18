<?php
include 'header.html';

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
