<?php
/*
 * Created on Jan 12, 2010
 *
 */
session_start();
if (!isset($_SESSION['auth_name']))
{
	if (isset($_POST['OK'])) 
	{
		$DB = new Database(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
		$DB->connect();
		
		$login=$_POST['login'];
		$password=$_POST['password'];
		$result = $DB->query_first("SELECT * FROM users WHERE login='$login' AND password='$password'");

		$_SESSION['auth_username'] 	= $result['id'];
		$_SESSION['auth_user'] 		= $result['login'];
		$_SESSION['auth_name'] 		= $result['name'];
		$_SESSION['auth_surname'] 	= $result['surname'];
		$DB->close();
		exit;
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

	}

	else	
	{
		?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
	    	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    	<meta name="title" content="<?php echo SITE_NAME;?>" />
	    	<meta name="keywords" content="" />
	    	<meta name="description" content="" />
	    	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	    	<link rel="stylesheet" href="styles/login.css" type="text/css" />
	    	<title><?php echo SITE_NAME; ?></title>
		</head>
		<body>
		<div id="content">
			<form action="" method="post" id="auth_form">
				Login: <input type="text" name="login" id="auth_username" />&nbsp;
				Password: <input type="password" name="password" id="auth_pass" />&nbsp;
				<input type="submit" name="OK" value="Login" />
			</form>
		</div>
		</body>
		</html>
		<?php 
	exit;
	}
}
?>

