<?php

//grab all rows from the table where state is "new" and put into array
$host = '';
$port = '';
$username = '';
$password = '';
$database = '';

$conn = mysqli_connect($host, $username, $password, $database, $port);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successful!";
