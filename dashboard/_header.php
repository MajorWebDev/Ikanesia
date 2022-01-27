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
		<link rel="stylesheet" href="../_asset/css/simple-sidebar.css">
		<link rel="stylesheet" href="../_asset/font-awesome/css/font-awesome.min.css">
		<link rel="icon" href="<?=base_url('img/logo.png')?>">
	</head>
	<body>
	<script src="../_asset/js/jquery.js"></script>
	<script src="../_asset/js/bootstrap.min.js"></script>
	<div id="wrapper">
		<div id="sidebar-wrapper">
        	<ul class="sidebar-nav">
            	<li class="sidebar-brand">
					<a href="#"><img src="../img/logo.png" width="100px"></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('ikan')?>">Data Ikan</a>
                </li>                
                <li>
                    <a href="<?=base_url('auth/logout.php')?>">Logout</a>
                </li>
            </ul>
		</div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
