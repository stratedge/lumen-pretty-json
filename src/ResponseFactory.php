<?php
namespace Stratedge\LumenPrettyJson;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Support\Arrayable;
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
        if ($data instanceof Arrayable) {
            $data = $data->toArray();
        }

        return new JsonResponse($data, $status, $headers, $options);
    }
}
