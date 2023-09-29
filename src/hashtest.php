<?php
    if (isset($_POST['password'], $_POST['salt'])) {
        $password = $_POST['password'];
        $salt = $_POST["salt"];
        $databasePassword = hash('sha512/256', $salt . $password);
        echo "password in database needs to be $databasePassword";
        echo "<br>";
        echo "salt in the database needs to be $salt";
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passgen</title>
</head>

<body>
    <form action="./hashtest.php" method="post">
        <input type="password" name="password" id="password">
        <input type="password" name="salt" id="salt">
        <input type="submit" value="Generate password">
    </form>
</body>

</html>