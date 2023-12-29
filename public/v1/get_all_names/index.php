<?php 
    require_once '../../../api/config.php';
    require_once '../../../api/response.php';
    
    $data = require_once '../../../api/data.php';
    $nomes = [];

    foreach($data as $d) {
        array_push($nomes ,$d['nome']);
    }

    echo Response::json(200, "success!", $nomes);