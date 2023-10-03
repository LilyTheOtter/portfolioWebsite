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
            <a href="../admin/newitem" class="nav-button"><p>hi</p></i></a>
            <a href="../admin/main" class="nav-button"><i class="fa-duotone fa-house fa-2xl"></i></a>
            <a href="../admin/logout" class="nav-button"><i class="fa-duotone fa-right-from-bracket fa-2xl"></i></a>
        </nav>

    </div>
</body>

</html>