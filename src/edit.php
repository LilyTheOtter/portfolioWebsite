<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location: login");
    exit;
};
require_once "backend/connection.php";
$stmt = $con->prepare('SELECT `type`, `inside`, `location`, `filename`, `content` FROM `content` WHERE `id` = ?');
$stmt->bind_param('s', $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$type = $row['type'];
$inside = $row['inside'];
$location = $row['location'];
$filename = $row['filename'];
$content = $row['content'];
$id = $_GET['id'];
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
        <div>
            <form action="backend/editContent.php" method="post">
                <div>
                    <label for="type"><a>Type:</a></label>
                    <select id="type" name="type">
                        <option value="none">None</option>
                        <?php
                        if($type == "pdf") echo '<option value="pdf" selected>PDF</option><option value="explorer">Explorer</option>';
                        else echo '<option value="pdf">PDF</option><option value="explorer" selected>Explorer</option>';
                        ?>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="id" id="id" value="<?php echo "$id"; ?>">
                </div>
                <div>
                    <label for="inside"><a>Inside:</a></label>
                    <select id="inside" name="inside">
                        <option value="none">None</option>
                        <?php
                        if($inside == "desktop") echo '<option value="desktop" selected>Desktop</option><option value="explorer">Explorer</option>';
                        else echo '<option value="desktop">Desktop</option><option value="explorer" selected>Explorer</option>';
                        ?>
                    </select>
                </div>
                <div>
                    <label for="location"><a>location:</a></label>
                    <select id="location" name="location" selected="<?php echo "$location"; ?>">
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
                            if($location == $id) echo ' <option value="' . $id . '" selected>' . $optionName . '</option>';
                            else echo ' <option value="' . $id . '">' . $optionName . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div>
                    <label for="filename"><a>Filename:</a></label>
                    <input type="text" name="filename" id="filename" placeholder="Filename" value="<?php echo "$filename"; ?>">
                </div>
                <div>
                    <label for="content"><a>Content:</a></label>
                    <textarea name="content" id="content" placeholder="Content"><?php echo "$content"; ?></textarea>
                </div>
                <div>
                    <input type="submit" value="Edit content">
                </div>
            </form>
        </div>
    </div>
</body>

</html>