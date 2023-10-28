<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login");
    exit;
};
require_once "connection.php";
$stmt = $con->prepare('SELECT `disabled` FROM `content` WHERE `id` = ?');
$stmt->bind_param('s', $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
$disabledResult = $result->fetch_assoc();
$disabled = $disabledResult["disabled"];
if ($disabled == 0) {
    $newValue = 1;
} else {
    $newValue = 0;
};
$statement = $con->prepare('UPDATE `content` SET `disabled` = ? WHERE `id` = ?;');
        $statement->bind_param("ii", $newValue, $_GET['id']);
        $statement->execute();
header("location: ../admin");
