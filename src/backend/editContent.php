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
$id = $_POST['id'];

$statement = $con->prepare("UPDATE `content` SET `type` = ?, `inside` = ?, `location` = ?, `filename` = ?, `content` = ? WHERE `id` = ?");
$statement->bind_param("ssissi", $type, $inside, $location, $filename, $content, $id);
$statement->execute();
header("location: ../admin");
