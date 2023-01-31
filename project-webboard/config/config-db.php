<?php 

# file connect database

$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "webboard";

$connect = mysqli_connect($host_name,$user_name,$password,$db_name);  # direct connect database
if (!$connect) {
    die('connect database fail :::: '.mysqli_error($connect));
}

# don't forget close 

?>