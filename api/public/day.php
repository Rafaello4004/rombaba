<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode(["day" => (int)date('d')]);