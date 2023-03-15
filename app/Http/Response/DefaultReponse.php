<?php

namespace App\Http\Response;

class DefaultReponse
{
    public $success = true;
    public $message = '';

    public $data;
    public $response_code = 200;

    public function __construct($data = null, $message = '', $success = true, $responseCode = 200) {
        $this->data = $data;
        $this->message = $message;
        $this->success = $success;
        $this->response_code = $responseCode;
    }
}
