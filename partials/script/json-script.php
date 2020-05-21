<?php
    include dirname(__DIR__) . '/data/data.php';
    header('Access-Control-Allow-Origin: *');   
    header('Content-Type: application/json');
    echo json_encode($database);  
