<?php
session_start();
session_destroy();

// Redirects the user to the login page:
header('Location: /login');
?>