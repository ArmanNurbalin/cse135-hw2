<?php
// This must also be the very first line
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><title>PHP State Demo - Page 2</title></head>
<body>
    <h1>PHP Sessions Page 2</h1>
    <?php
    if (isset($_SESSION['username'])) {
        echo "<p><b>Name:</b> " . htmlspecialchars($_SESSION['username']) . "</p>";
    } else {
        echo "<p><b>Name:</b> You do not have a name set.</p>";
    }
    ?>
    <br>
    <a href="php-state-demo-p1.php">Go back to Session Page 1</a>
    
    <form style="margin-top:30px" action="php-destroy-session.php" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
