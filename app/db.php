<?php

$localhost  = 'localhost';
$db_user    = 'root';
$db_pass    = '';
$db_name    = 'db_todo';

$db = mysqli_connect($localhost, $db_user, $db_pass, $db_name);

if ($db){
    echo "connected";
}

?>