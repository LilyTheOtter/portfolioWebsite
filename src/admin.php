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
    <title>Admin page</title>
</head>

<body>
    <div class="content">
        <nav class="navbar">
            <a href="./newitem" class="nav-button" title="Go to users"><img src="./images/people.svg" alt="People icon"></a>
            <a href="./main" class="nav-button" title="Add new content"><img src="./images/add-file.svg" alt="Add file icon"></a>
            <a href="./logout" class="nav-button" title="Log out"><img src="./images/logout.svg" alt="Logout icon"></a>
        </nav>
        <h1>Admin page</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Inside</th>
                <th>Location</th>
                <th>Filename</th>
                <th>Actions</th>
            </tr>
            <tbody class="tablebody">
                <?php
                require_once "backend/connection.php";

                $stmt = $con->prepare("SELECT `id`, `type`, `inside`, `location`, `filename`, `disabled` FROM `content` WHERE NOT `type` = 'desktop'");
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $type = $row["type"];
                    $inside = $row["inside"];
                    $location = $row["location"];
                    $filename = $row["filename"];
                    $disabled = $row["disabled"];
                    echo '<tr><td>' .
                        $id . '</td><td>' .
                        $type . '</td><td>' .
                        $inside . '</td><td>' .
                        $location . '</td><td>' .
                        $filename . '</td>
                    <td>
                        <a href="backend/disableContent?id=' . $id . '" title="Enable/disable" data-toggle="tooltip">';
                    if (!$disabled) {
                        echo '<img src="./images/eye.svg" alt="Eye Icon">';
                    } else {
                        echo '<img src="./images/eye-slash.svg" alt="Eye with slash Icon"';
                    };
                    echo '</span></a>
                        <a href="edit?id=' . $id . '" title="Update Record" data-toggle="tooltip"><img src="./images/pencil.svg" alt="Pencil Icon"></span></a>'
                        . '</span></a>
                        <a href="delete?id=' . $id . '" title="Delete Record" data-toggle="tooltip"><img src="./images/trash.svg" alt="Trash Icon"></span></a>' .
                    '</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>