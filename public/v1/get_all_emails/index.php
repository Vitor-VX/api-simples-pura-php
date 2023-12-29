<?php 

    require_once '../../../api/config.php';
    require_once '../../../api/response.php';

    $data = require_once '../../../api/data.php';
    $emails = [];

    foreach($data as $e) {
        array_push($emails, $e['email']);
    }

    echo Response::json(200, "success!", $emails);