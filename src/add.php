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
            <a href="./admin" class="nav-button" title="Go to users"><img src="./images/people.svg" alt="People icon"></a>
            <a href="./add" class="nav-button" title="Add new content"><img src="./images/add-file.svg" alt="Add file icon"></a>
            <a href="./logout" class="nav-button" title="Log out"><img src="./images/logout.svg" alt="Logout icon"></a>
        </nav>
        <h1>Admin page</h1>
        <div>
            <form action="backend/addContent.php" method="post">
                <div>
                    <label for="type"><a>Type:</a></label>
                    <select id="type" name="type">
                        <option value="none">None</option>
                        <option value="pdf">PDF</option>
                        <option value="explorer">Explorer</option>
                    </select>
                </div>
                <div>
                    <label for="inside"><a>Inside:</a></label>
                    <select id="inside" name="inside">
                        <option value="desktop" selected>Desktop</option>
                        <option value="explorer">Explorer</option>
                        <option value="none">None</option>
                    </select>
                </div>
                <div>
                    <label for="location"><a>location:</a></label>
                    <select id="location" name="location">
                        <?php
                        require_once "backend/connection.php";

                        $statement = $con->prepare("SELECT `id`, `type`, `filename` FROM `content` WHERE `type` = 'desktop' OR `type` = 'explorer'");
                        $statement->execute();
                        $results = $statement->get_result();
                        while ($row = $results->fetch_assoc()) {
                            $id = $row["id"];
                            $type = $row["type"];
                            $filenames = $row["filename"];
                            $optionName = $filenames ? $type . ": " . $filenames : $type;
                            echo ' <option value="' . $id . '">' . $optionName . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div>
                    <label for="filename"><a>Filename:</a></label>
                    <input type="text" name="filename" id="filename" placeholder="Filename" value="">
                </div>
                <div>
                    <label for="content"><a>Content:</a></label>
                    <textarea name="content" id="content" placeholder="Content"></textarea>
                </div>
                <div>
                    <input type="submit" value="Add content">
                </div>
            </form>
        </div>
    </div>
</body>

</html>