<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('../auth/login.php')."';</script>";
} 

$id_ikan = $_GET["id_ikan"];
$sql = "SELECT * FROM ikan WHERE id_ikan='$id_ikan'";
$query = mysqli_query($con, $sql) or die (mysqli_error());
$data = mysqli_fetch_array($query);
$patch = '../_asset/upload_gambar/'.$data['gambar'];

if(file_exists($patch)){
	unlink($patch);
};

mysqli_query($con, "DELETE FROM ikan WHERE id_ikan = '$_GET[id_ikan]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>

