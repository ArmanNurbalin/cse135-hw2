<?php
// This must be the very first line
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    // Redirect to prevent form resubmission
    header("Location: php-state-demo-p1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head><title>PHP State Demo - Page 1</title></head>
<body>
    <h1>PHP Sessions Page 1</h1>
    
    <?php if (isset($_SESSION['username'])): ?>
        <p><b>Name:</b> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <?php else: ?>
        <p><b>Name:</b> You do not have a name set.</p>
    <?php endif; ?>

    <form action="php-state-demo-p1.php" method="post" style="margin-top:15px;">
        <label for="username">Set your name:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Save Name">
    </form>
    <br>
    <a href="php-state-demo-p2.php">Go to Session Page 2</a><br>
    
    <form style="margin-top:30px" action="php-destroy-session.php" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
