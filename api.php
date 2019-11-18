<?php
header('Content-type:application/json');

$file = 'soul.json';

$data = json_decode(file_get_contents($file), true);

$rand = rand(0, count($data));

echo json_encode($data[$rand]);