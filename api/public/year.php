<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode(["year" => (int)date('Y')]);