<?php
  require_once('database.php');
	
	$query = "SELECT S.pID,firstName,lastName,email,major,semester
			  FROM intern_students S,intern_internships I
			  WHERE S.pID = I.pID";
			  
	$intern_list = $db->query($query);
?>
