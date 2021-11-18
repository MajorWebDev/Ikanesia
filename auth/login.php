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
    <title>Login - Ikanesia</title>
</head>

<body>
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
    			<form action="" method="post">    				
    					<input type="text" name="user" placeholder="Username" required autofocus>   
    					<input type="password" name="pass" placeholder="Password" required>
    					<input type="submit" name="login" value="Login"> 
    			</form>
	<a href="<?php echo base_url()?>">Kembali ke Beranda</a>
</body>
</html>
<?php
}
?>