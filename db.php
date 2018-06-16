<?php
$servername = 'localhost:3306';
$username = 'root';
$password = 'root';
$database = 'scoranda';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die('Ruh-roh, something\'s broken.  Tell Scott that the internet machine says: ' . mysqli_connect_error());
}
?>