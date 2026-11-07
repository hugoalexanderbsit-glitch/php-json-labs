<?php
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
$name = trim($input["name"] ?? "");

if ($name === "") {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Please enter your name."
    ]);
    exit;
}

echo json_encode([
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
]);
