<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa1706c1";

$con = new mysqli($servername, $username, $password, $dbname );

if ($con->connect_error) {
	echo "connection_error";
}


?>