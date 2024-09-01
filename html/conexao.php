<?php

$servername="localhost";
$username="root";
$password="Primo@123";
$dbname="db_library";

try{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}
?>