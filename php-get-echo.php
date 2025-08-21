<!DOCTYPE html>
<html lang="en">
<head><title>GET Echo</title></head>
<body>
    <h1>GET Request Echo</h1>
<p> Please modify the site url to see the GET request in action without the use of a CLI tool like curl. For example, you could use <code>https://armannur.site/cgi-bin/php-get-echo.php?subject=CSE135&prof=powell&hotel=trivago</code>.</p>
    <pre>
<?php
echo "Received the following GET data:\n";
print_r($_GET);
?>
    </pre>
</body>
</html>
