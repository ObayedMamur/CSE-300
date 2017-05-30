<?php
include ('dbcon.php');
$user_query=mysql_query("select * from user") or die(mysql_error());
	while($row=mysql_fetch_array($user_query))
	{
		$id=$row['Id'];
		$name=$row['Name'];
	echo "Id: " . $id. " - Name: " . $name;
	}
	

?>