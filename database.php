<?php
    $host = 'insert_host_here';
    $dbname='insert_db_here';
    $username = 'insert_user_here';
    $password = 'insert_pw_here';

    $db = new mysqli($host, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        include('../view/database_error.php');
        exit();
    }
?>
