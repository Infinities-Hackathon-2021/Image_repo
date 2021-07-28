<?php
$config  = file_get_contents("/secrets/php-app/config.json");
$db = json_decode($config,true);
$db_host = "127.0.0.1:3306";
$db_user = $db['username'];
$db_pass = $db['password'];
$db_name = $db['database'];

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>