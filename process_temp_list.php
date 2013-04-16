<?php
  require_once('database.php');
	
	$query = "SELECT *
			  FROM intern_temp_users";
			  
	$temp_list = $db->query($query);
?>
