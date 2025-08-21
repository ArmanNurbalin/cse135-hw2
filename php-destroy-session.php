<?php
// 1. Find the existing session
session_start();

// 2. Unset all session variables
$_SESSION = array();

// 3. Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head><title>PHP Session Destroyed</title></head>
<body>
    <h1>Session Destroyed</h1>
    <a href="php-state-demo-p1.php">Back to Page 1</a><br>
    <a href="php-state-demo-p2.php">Back to Page 2</a>
</body>
</html>
