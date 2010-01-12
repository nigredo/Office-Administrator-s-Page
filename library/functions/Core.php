<?php
/*
 * Created on Jan 12, 2010
 *
 */
function show_ftpaccounts()
{
	$my_host=$GLOBALS["my_hostname"].":".$GLOBALS["my_port"];
	$my_connection = mysql_pconnect($my_host,$GLOBALS["my_username"],$GLOBALS["my_password"]);
	if (!$my_connection)
	{
	 	die ("<font color='#ff3333'>Could not connect to the database server!</font>");
	};
	$my_db_select=mysql_select_db("ftp");
	if (!$my_db_select)
	{
	 	die ("<font color='#ff3333'>The database does not exist!</font>");
	};
	print "<fieldset>";
	print "<legend>FTP Accounts</legend>";
	echo "<div class='add'><a href='.?show=ftp&add=true'>Add</a></div>";
	echo "<table>\n
        <tr>\n
        <th>Username</th>\n
        <th>Password</th>\n
	    <th>Home</th>\n
	    <th>Delete</th>\n
        </tr>\n";
	$my_query = "SELECT * FROM users"; 
 	$query = mysql_query($my_query);
	while ($row = mysql_fetch_array($query,MYSQL_ASSOC))
		{
			echo "<tr";
			@$count++;
            if ($count/2==intval($count/2)) { $style = "style='background-color: #e3f2ff;'";} else { $style=""; };
			echo "<td ".$style."><input ".$style." name='user' type='text' value='" . $row['user'] . "'></td>\n";
			echo "<td ".$style."><input ".$style." name='password' type='text' value='" . $row['password'] . "'></td>\n";
			echo "<td ".$style."><input ".$style." name='home' type='text' value='" . $row['home'] . "'></td>\n";
			echo "<td ".$style."><div class='add'><a href='index.php?show=ftp&delete=true&user=".$row['user']."'>Delete</a></div></td>\n";
			echo "</tr>\n";
		}
        echo "</table>\n";
    	echo "</form>";
	print "</fieldset>";
	mysql_close($my_connection);
}
 
 
?>
