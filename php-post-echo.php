<!DOCTYPE html>
<html lang="en">
<head><title>POST Echo</title></head>
<body>
    <?php if (!empty($_POST)): ?>
        <h1>POST Request Echo</h1>
        <pre>
<?php
echo "Received the following POST data:\n";
print_r($_POST);
?>
        </pre>
        <hr>
    <?php endif; ?>

    <h2>Submit a POST Request</h2>
	<p>Once a request is submitted, it will be displayed above. Note: there is input validation for the email</p>
    <form action="php-post-echo.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
