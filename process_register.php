<?php
  require_once('database.php');
	//require('user_db.php');
	
	$error_message = '';
	$iUsername = $_POST['username'];
	$usernameMatch = preg_match('/^[a-zA-Z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+\.[a-z]{2,4}$/', $iUsername);
	$iPassword = sha1($_POST['password']);
	$passwordMatch = preg_match('/^[a-zA-Z0-9\.-\_]+$/', $_POST['password']);
	$role = ucfirst($_POST['role']);
	
	if ( $usernameMatch != 1 )  {
        $error_message = ' ' . 'Invalid username.' . ' '; }
	if ( $passwordMatch != 1 )  {
        $error_message = ' ' . 'Invalid password.' . ' '; }
	if ( empty($role) ) {
		$error_message = ' ' . 'Role is a required field. Please enter Student or Company.' . ' '; }
	if ($role == "IC") {
		$error_message = ' ' . 'Role cannot be IC.' . ' '; }
		
	$query1 = "SELECT iUsername FROM intern_users ";
	$nameCheck = $db->query($query1);
	//$nameExists = 0;
	
	foreach ($nameCheck as $name) :
		if ($name['iUsername'] == $iUsername) {
			//$nameExists = 1;
			$error_message = ' ' . 'Username already exists.' . ' ';
		}
	endforeach;
	
	if ($error_message != '') {
        include('../view/register_user.php');
        exit();
    }
	
	$query = "INSERT INTO intern_temp_users (iUsername, iPassword, role) 
			  VALUES('".$iUsername."','".$iPassword."','".$role."')";
    $db->query($query);
	
	include('../view/approval.php');
	exit();

?>
