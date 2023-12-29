<?php

use function PHPSTORM_META\type;

class Response
{
    public static function json($status = 200, $message = "success", $data = null)
    {
        header('Content-Type: application/json');

        function typeDados($status, $message, $data, $type = "error")
        {
            if ($type == "error") {
                return [
                    'status' => 400,
                    'message' => "api is not running!",
                    'data_time' => date('d-m-Y'),
                    'date' => null
                ];
            }

            return [
                'status' => $status,
                'message' => $message,
                'data_time' => date('d-m-Y'),
                'date' => $data
            ];
        }

        if (!API_ATIVADO) {
            $response = typeDados($status, $message, $data);
        } else {
            $response = typeDados($status, $message, $data, "success");
        }

        return json_encode($response);
    }
}
