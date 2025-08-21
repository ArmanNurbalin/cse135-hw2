<?php
header('Content-Type: application/json');

$data = [
    'message' => 'Hello, JSON!',
    'timestamp' => date('Y-m-d H:i:s'),
    'ipAddress' => $_SERVER['REMOTE_ADDR']
];
echo json_encode($data);
?>