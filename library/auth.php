<?php
/*
 * Created on Jan 12, 2010
 *
 */
print ("<html>\n");
print ("<head>\n");
print ("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>\n");
print ("<link rel='stylesheet' type='text/css' href='css/main.css' media='all'>\n");
print ("<title>Office Administrator</title></head>\n");
print ("<body>\n");
print ("<div class='wrapper'>\n");
include ('config/config.php');
$my_host=$GLOBALS["my_hostname"].":".$GLOBALS["my_port"];
$my_connection = mysql_pconnect($my_host,$GLOBALS["my_username"],$GLOBALS["my_password"]);
mysql_select_db("microinvest") or die ("Can not select the database");
session_start();
if (!isset($_SESSION['user_id']))
{
	if (isset($_POST['submit'])) {
		$login=$_POST['login'];
		$password=$_POST['password'];
		$query = "SELECT * FROM login_users WHERE login='$login' AND password='$password'";
		$result = mysql_query($query) or die(mysql_error());
		if ($row = mysql_fetch_assoc($result)) 
		{
			$_SESSION['user_id'] 	= $row['id'];
			$_SESSION['user'] 	= $login;
			$_SESSION['name'] 	= $row['name'];
			$_SESSION['surname'] 	= $row['surname'];
		}
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit;
	}
	
	if (!isset($_SESSION['user_id']))
	{
	?>
	<div class="logindiv">
	<form class="login" method="post">
		<table width="200px">
			<tr>
				<td>
				<input class="logintext" name="login" type="text" id="login">
				</td>
			</tr>
			<tr>
				<td>
				<input class="logintext" name="password" type="password" id="password">
				</td>
			</tr>
			<tr>
				<td align="center">
				<input class="button" type="submit" name="submit" value="Login">
				</td>
			</tr>
		</table>
	</form> 
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

