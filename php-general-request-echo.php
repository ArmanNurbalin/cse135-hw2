<!DOCTYPE html>
<html lang="en">
<head><title>General Request Echo</title></head>
<body>
    <h1>General Request Echo</h1>
    <p>Request Method: <?php echo htmlspecialchars($_SERVER['REQUEST_METHOD']); ?></p>
    <hr>
    <h2>Request Data</h2>
    <pre>
<?php
echo "Received the following data:\n";
print_r($_REQUEST);
?>
    </pre>
</body>
</html>