<?php

//grab all rows from the table where state is "new" and put into array
$host = 'db-mysql-airvendb2b-do-user-4199791-0.b.db.ondigitalocean.com';
$port = '25060';
$username = 'doadmin';
$password = 'zmJTs008ybcc7nND';
$database = 'airvendb2b';

$conn = mysqli_connect($host, $username, $password, $database, $port);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successful!";
