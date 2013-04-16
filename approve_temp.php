<?php

$iUsername = $_POST['username'];
$iPassword = $_POST['password'];
$role = $_POST['role'];


require_once('database.php');

$query = "INSERT INTO intern_users
  		  VALUES('".$iUsername."','".$iPassword."','".$role."')";
$db->query($query);

$query2 = "DELETE FROM intern_temp_users
          WHERE iUsername = '$iUsername'";
$db->query($query2);


include('../view/temp_list.php');
?>
