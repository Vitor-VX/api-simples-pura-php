<?php 

    require_once '../../../api/config.php';
    require_once '../../../api/response.php';

    echo Response::json(200, "API is running!");