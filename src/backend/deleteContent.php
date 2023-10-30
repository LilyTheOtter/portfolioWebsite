<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login");
    exit;
};
require_once "connection.php";
$stmt = $con->prepare('DELETE FROM `content` WHERE `id` = ?');
$stmt->bind_param('s', $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
header("location: ../admin");