<?php
include __DIR__ . '/../albums.php';

$data = [
    'succes' => true,
    'response' => $albums
];

header("Content-Type: application/json");
echo json_encode($data);