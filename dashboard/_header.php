<?php
	require_once "../_config/config.php";
	if(!isset($_SESSION['user'])) {
		echo "<script>window.location='".base_url('auth/login.php')."';</script>";
	} 
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Ikanesia</title>
		<link rel="stylesheet" href="../_asset/css/bootstrap.min.css">
		<link rel="icon" href="<?=base_url('img/logo.png')?>">
	</head>
	<body>