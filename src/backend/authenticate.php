<?php
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not fetch  any data from form subbmission
    exit('Please make sure you filled both the username and password form fields!');
};

require_once "connection.php";

$stmt = $con->prepare('SELECT `salt` FROM `Users` WHERE `username` = ?');
// Bind parameters (s = string, i = int, b = blob, etc). Since a string is the username in our case, we use "s"
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($salt);
$stmt->fetch();

// We need to Prepare our SQL. This SQL preparation helps prevent SQL injections
if ($stmt = $con->prepare('SELECT `id`, `password` FROM `Users` WHERE `username` = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc). Since a string is the username in our case, we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store or preserve the results. It helps counter-check if the  user account exists within our database.
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // At this point, the account exists. The only thing left is to verify the password.
        if (hash('sha512/256', $salt . $_POST['password']) === $password) {
            // Verification was a success! User log in took place!
            session_start();
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('location: ../admin');
        } else {
            // Incorrect password
            header('Location: ../login?error=incorrect');
        }
    } else {
        // Incorrect username
        header('Location: ../login?error=incorrect');
    }
    $stmt->close();
}
