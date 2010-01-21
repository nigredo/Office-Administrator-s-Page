<?php
/*
 * Created on Jan 12, 2010
 *
 */
function show_ftpaccounts()
{
	$DB = new Database(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	$DB->connect();
	
	print "<fieldset>";
	print "<legend>FTP Accounts</legend>";
	echo "<table>\n
        <tr>\n
        <th>Username</th>\n
        <th>Password</th>\n
	    <th>Home</th>\n
	    <th>Delete</th>\n
        </tr>\n";
	$my_query = "SELECT * FROM ftp_users"; 
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
