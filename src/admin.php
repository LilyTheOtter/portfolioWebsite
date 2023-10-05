<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login");
    exit;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <nav class="navbar">
            <a href="./newitem" class="nav-button" title="Go to users"><img src="./images/people.svg" alt="People icon"></a>
            <a href="./main" class="nav-button" title="Add new content"><img src="./images/add-file.svg" alt="Add file icon"></a>
            <a href="./logout" class="nav-button" title="Log out"><img src="./images/logout.svg" alt="Logout icon"></a>
        </nav>
    </div>
</body>

</html>