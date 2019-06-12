<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 18:06
 */

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "f-bikes-database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>