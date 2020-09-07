<?php

namespace mast;

class Response
{
    public function send()
    {
        $data = 'hello world';

        if (!headers_sent()) {
            http_response_code(200);
        }

        echo $data;
    }
}