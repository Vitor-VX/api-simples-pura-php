<?php 
    require_once '../../../api/config.php';
    require_once '../../../api/response.php';
    
    $data = require_once '../../../api/data.php';

    echo Response::json(200, "success!", $data);