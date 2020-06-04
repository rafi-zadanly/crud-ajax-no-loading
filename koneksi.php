<?php 

$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "pwpb_tugas6";
$DB_PORT = "3306";

$connect = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);

if ($connect->connect_error) {
    die("Connection Failed : " . $conn->connect_error );
}

?>