<?php
require_once '_config/config.php';
include 'header.html';
?>
<div class="bg-wrapper" id="wrapper">
<div class="wrapper">
<?php
if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('dashboard')."';</script>";
} 

if (isset($_GET['item'])) {
    include 'item/index.php';
}
else {
    include 'content.php';
}
echo "</div></div>";
include 'footer.html';

?>
