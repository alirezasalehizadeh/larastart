<?php

use Illuminate\Support\Facades\Lang;
use App\Http\Resources\ApiResourceCollection;

function apiResponse(mixed $data = [], string $message = '', int $code = 200)
{
    return (new ApiResourceCollection($data, Lang::get($message), $code))
        ->response()
        ->setStatusCode($code);
}
