<?php
require_once('database.php');

function add_user($user, $pass) {
    $query = "INSERT INTO intern_users (iUsername, iPassword) 
  		  VALUES('".$username."','".$password."')";
    $db->query($query);
}

function is_valid_user_login($user, $pass) {
    $query = "SELECT iUsername FROM intern_users
              WHERE iUsername = '" . $user . "' AND iPassword = '" . $pass . "'";
    $validate = $db->query($query);
	$valid = ($validate->num_rows == 1);
    return $valid;
}
?>
