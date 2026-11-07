<?php
header("Content-Type: text/plain");

$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

if ($data === null) {
    http_response_code(400);
    echo "No valid JSON received. Send a POST request with a JSON body.";
    exit;
}

echo "Username: " . ($data["username"] ?? "") . "\n";
echo "Password: " . ($data["password"] ?? "") . "\n";
