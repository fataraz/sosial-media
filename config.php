<?php

$db_host = "localhost";
$db_user = "fataraz";
$db_pass = "123456789";
$db_name = "dbsosmed";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
