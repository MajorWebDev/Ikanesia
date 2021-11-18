<?php
require_once "../_config/config.php";
if (!isset($_SESSION['user'])) {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Ikanesia</title>
</head>
<body>
	<h1>Dashboard</h1>
	<p>Selamat datang <strong><?=$_SESSION['user']?></strong> di <strong>Ikanesia</strong></p>

	<a href="<?=base_url('ikan')?>"><span class="text-danger">Data Ikan</span></a> | <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
</body>
</html>