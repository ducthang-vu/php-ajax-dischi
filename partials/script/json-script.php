<?php
    include dirname(__DIR__) . '/data/data.php';
    header( 
        'Access-Control-Allow-Origin: *', 
        'Content-Type => application/json'
    );   
    echo json_encode($database);  
