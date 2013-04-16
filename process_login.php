<?php
  require_once('database.php');
	//require('user_db.php');
	
	$error_message = '';
	$iUsername = $_POST['username'];
	$usernameMatch = preg_match('/^[a-zA-Z0-9\.-\_]+@[a-zA-Z0-9\.-\_]+\.[a-z]{2,4}$/', $iUsername);
	$iPassword = sha1($_POST['password']);
	$passwordMatch = preg_match('/^[a-zA-Z0-9\.-\_]+$/', $_POST['password']);
	
	//if ( empty($iUsername) ) {
        //$error_message = ' ' . 'First name is a required field.' . ' '; }
	//if ( empty($iPassword) ) {
		//$error_message = ' ' . 'Password is a required field.' . ' '; }
    if ( $usernameMatch != 1 || $passwordMatch != 1 )  {
        $error_message = ' ' . 'Invalid username or password!' . ' '; }
	
	if ($error_message != '') {
        include('../view/authorize_user.php');
        exit();
    }
	
	$uquery = "SELECT iUsername FROM intern_users
               WHERE iUsername = '" . $iUsername . "'";
	$uvalidate = $db->query($uquery);
	$uvalid = ($uvalidate->num_rows == 1);
	
	$pquery = "SELECT iPassword FROM intern_users
               WHERE iPassword = '" . $iPassword . "'";
	$pvalidate = $db->query($pquery);
	$pvalid = ($pvalidate->num_rows == 1);
	
	$query = "SELECT iUsername FROM intern_users
              WHERE iUsername = '" . $iUsername . "' AND iPassword = '" . $iPassword . "'";
    $validate = $db->query($query);
	$valid = ($validate->num_rows == 1);
    
	if ($valid) {
		$query1 = "SELECT role
				  FROM intern_users
				  WHERE iUsername = '$iUsername'";
		$rolecheck = $db->query($query1);
		$rolecheck = $rolecheck->fetch_assoc();
		if ($rolecheck['role'] == 'IC' ) {
			include('../view/temp_list.php');
			exit();
		} else if ($rolecheck['role'] == 'Student' ) {
			include('../index.php');
			exit();
		} else {
			include('../view/congrats.php');
			exit();
		}
	} else if (!$uvalid && !$pvalid) {
		$error_message = "Please register your account.";
		include('../view/register_user.php');
		exit();
	} else if (!$uvalid || !$pvalid) {
		$error_message = "Invalid username or password.";
		include('../view/authorize_user.php');
		exit();
	}

?>
