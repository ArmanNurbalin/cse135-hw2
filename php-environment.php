<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Environment</title>
</head>
<body>
    <h1>PHP Environment Variables</h1>
    <pre>
<?php
foreach ($_SERVER as $key => $value) {
    echo htmlspecialchars($key) . " = " . htmlspecialchars($value) . "\n";
}
?>
    </pre>
</body>
</html>