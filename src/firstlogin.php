<?php
require_once "backend/connection.php";

$stmt = $con->prepare('SELECT COUNT(*) FROM users');
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($count);
$stmt->fetch();
if ($count > 0) {
    header("location: login");
    exit;
} else {
    if (isset($_POST['username'], $_POST['password'], $_POST['repeatpassword'])) {
        if ($_POST['password'] === $_POST['repeatpassword']) {
            if (strlen($_POST["username"]) < 64) {
                $bytes = random_bytes(random_int(28, 32));
                $hexbytes = bin2hex($bytes); //salt we will be using
                $password = hash('sha512/256', $hexbytes . $_POST['password']);
                $statement = $con->prepare("INSERT INTO `users` (`username`, `permissiongroup`, `password`, `salt`) VALUES (?, ?, ?, ?)");
                $statement->bind_param("ssss", $username, $permissiongroup, $password, $salt);
                $username = $_POST["username"];
                $permissiongroup = "Admin";
                $salt = $hexbytes;
                $statement->execute();
                header("location: login");
                exit;
            } else {
                header("location: firstlogin?error=wrongUsername");
                exit;
            };
        } else {
            header("location: firstlogin?error=incorrect");
            exit;
        }
    };
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Noto Sans" rel="stylesheet">
        <link rel="stylesheet" href="admin.css">
        <title>Document</title>
    </head>
    
    <body>
        <div class="admin-login">
            <h1>First time user creation</h1>';

    if (!empty($_GET["error"])) {
        if ($_GET["error"] == "incorrect") {
            echo '<a2 class="error">Passwords do not match</a2>';
        } elseif ($_GET["error"] == "wrongUsername") {
            echo '<a2 class="error">Username is not valid</a2>';
        }
    }

    echo    '<form action="firstlogin" method="post">
                        <label style="border-radius: 10px 0px 0px 10px;" for="username">
                            <img src="./images/person.svg" alt="Person icon">
                        </label>
                        <input style="border-radius: 0px 10px 10px 0px;" type="text" name="username" placeholder="Username" id="username" title="Please fill in a username" required>
                        <input style="border-radius: 10px 0px 0px 10px;" type="password" name="password" placeholder="Password" id="password" title="Please fill in a secure password" required>
                        <label style="border-radius: 0px 10px 10px 0px;" for="password">
                            <img src="./images/lock.svg" alt="Lock icon">
                        </label>
                        <input style="border-radius: 10px 0px 0px 10px;" type="password" name="repeatpassword" placeholder="Repeat password" id="repeatpassword" title="Please repeat your password" required>
                        <label style="border-radius: 0px 10px 10px 0px;" for="repeatpassword">
                            <img src="./images/lock.svg" alt="Lock icon">
                        </label>
                        <input type="submit" value="Create account">
                    </form>
                </div>
            </body>
        </html>';
};
