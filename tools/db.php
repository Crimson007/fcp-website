<?php
function getDatabaseConnection() {
    $servername = "sql112.infinityfree.com";
    $username = "if0_36812137";
    $password = "R2wgLHBGI5oF";
    $database = "if0_36812137_fcpdb";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("Error failed to connect to MySQL: " . $connection->connect_error);
    }
    
    return $connection;
}
?>