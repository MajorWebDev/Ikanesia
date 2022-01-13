<?php include_once('_header.php'); ?>
	<h1>Dashboard</h1>
	<p>Selamat datang <strong><?=$_SESSION['user']?></strong> di <strong>Ikanesia</strong></p>
	<a href="<?=base_url('ikan')?>"><span class="text-danger">Data Ikan</span></a> | <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
<?php include_once('_footer.php'); ?>