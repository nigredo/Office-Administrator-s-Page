<?php
/*
 * Created on Jan 12, 2010
 *
 */

session_start();
if (!isset($_SESSION['auth_name']))
{
	if (isset($_POST['Login'])) {
		$login=$_POST['auth_username'];
		$password=$_POST['auth_pass'];
		$result = $DB->query_first("SELECT * FROM login_users WHERE login='$login' AND password='$password'");
		if ($row = mysql_fetch_assoc($result)) 
		{
			$_SESSION['auth_username'] 	= $row['id'];
			$_SESSION['auth_user'] 		= $login;
			$_SESSION['auth_name'] 		= $row['name'];
			$_SESSION['auth_surname'] 	= $row['surname'];
		}
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit;
	}
	
	if (!isset($_SESSION['user_id']))
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
    <link rel="stylesheet" href="public/styles/awiki.css" type="text/css" />
    <title><?php echo SITE_NAME; ?></title>
</head>
<body>
    <div id="content">
        <div id="auth">
            <form action="" method="post" id="auth_form">
                Login: <input type="text" name="login" id="auth_username" />
                Password: <input type="password" name="password" id="auth_pass" />
                <input style="padding:5pt;" type="submit" value="Login" />
            </form>
            <span id="error"></span>
        </div>
    </div>
</body>
</html>
<?php 
	exit;
	}
}
else
{
}
?>

