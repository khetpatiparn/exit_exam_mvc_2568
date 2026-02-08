<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mvc_db";
$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);
if (!@$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
