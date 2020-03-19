<?php
// Write the php code to connect to the remote database and display an error message if the connection fails
$db_host = "hostname";
$db_user = "root";
$db_password = "password";
$db_name = "dbname";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("Connect failed: %s\n". $conn -> error);
?>