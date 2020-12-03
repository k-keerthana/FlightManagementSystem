<?php
$sql_host="localhost";
$sql_username="root";
$sql_password='';
$sql_database="login";
function connect_db() {
global $sql_host, $sql_username, $sql_password, $sql_database;
$conn=mysqli_connect($sql_host,$sql_username,$sql_password,$sql_database) or die(mysqli_connect_error());
if(mysqli_connect_error($conn) !== null) {
return false;
}
return $conn;
}
?>