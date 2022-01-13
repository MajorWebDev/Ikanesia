<?php
	require_once "../_config/config.php";
	if(isset($_SESSION['user'])) {
		echo "<script>window.location='".base_url()."';</script>";
	} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="../_asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../_asset/style.css">
    <title>Login - Ikanesia</title>
</head>

<body class="text-center">
    <?php
    	if(isset($_POST['login'])) {
    		$user = trim(mysqli_real_escape_string($con, $_POST['user']));
    		$pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
    		$sql_login = mysqli_query($con, "select * from users where username='$user' and password='$pass'") or die (mysql_error($con));
    		if(mysqli_num_rows($sql_login) > 0) {
    			$_SESSION['user'] = $user;
    			echo "<script>window.location='".base_url('dashboard')."';</script>";
    		} else { ?>
    			<strong>Login Gagal!</strong> Username / password salah    			
    			<?php
    				}
    			}
    			?>
    			<form class="form-signin" action="" method="post">   
					<img class="mb-3" src="../img/logo.png" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
					<input type="text" name="user" class="form-control" placeholder="Username" required autofocus> 
    				<input type="password" name="pass" class="form-control" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block mt-2" name="login" type="submit">Sign in</button>
					<p class="mt-5 mb-3 text-muted">© 2021-2022 <a href="<?php echo base_url()?>">Ikanesia</a></p>
    			</form>
</body>
</html>
<?php
}
?>