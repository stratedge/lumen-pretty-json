<?php
namespace Stratedge\LumenPrettyJson;

use Laravel\Lumen\Http\ResponseFactory as BaseResponseFactory;

class ResponseFactory extends BaseResponseFactory {

    /**
     * Return a new JSON response from the application.
     *
     * @param  string|array  $data
     * @param  int    $status
     * @param  array  $headers
     * @param  int    $options
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function json($data = array(), $status = 200, array $headers = array(), $options = JSON_PRETTY_PRINT)
    {
        return parent::json($data, $status, $headers, $options);
    }
}
