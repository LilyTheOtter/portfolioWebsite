<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: ../login");
    exit;
};
require_once "connection.php";
// print_r(array($_POST));

$type = $_POST['type'];
$inside = $_POST['inside'];
$location = $_POST['location'];
$filename = $_POST['filename'];
$content = $_POST['content'];

$statement = $con->prepare("INSERT INTO `content` (`type`, `inside`, `location`, `filename`, `content`) VALUES (?, ?, ?, ?, ?)");
$statement->bind_param("ssiss", $type, $inside, $location, $filename, $content);
$statement->execute();

header("location: ../admin");
