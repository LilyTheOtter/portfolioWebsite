<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>

<body>
    <div class="admin-login">
        <h1>User login</h1>
        <?php
        if (!empty($_GET["error"])) {
            if ($_GET["error"] == "incorrect") {
                echo '<a2 class="error">Incorrect credentials</a2>';
            }
        }
        ?>
        <form action="backend/authenticate.php" method="post">
            <label style="border-radius: 10px 0px 0px 10px;" for="username">
            <img src="./images/person.svg" alt="Person icon">
            </label>
            <input style="border-radius: 0px 10px 10px 0px;" type="text" name="username" placeholder="Username" id="username" required>
            <input style="border-radius: 10px 0px 0px 10px;" type="password" name="password" placeholder="Password" id="password" required>
            <label style="border-radius: 0px 10px 10px 0px;" for="password">
                <img src="./images/lock.svg" alt="Lock icon">
            </label>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>