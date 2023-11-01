<?php
// Database connection details
$DATABASE_HOST = 'db';
$DATABASE_USER = 'portfolio';
$DATABASE_PASS = file_get_contents('/run/secrets/MYSQL_PASSWORD_FILE');
$DATABASE_NAME = 'portfolioWebsite';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>