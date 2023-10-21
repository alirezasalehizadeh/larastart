<?php

use Illuminate\Support\Facades\Lang;
use App\Http\Resources\ApiResourceCollection;
use Illuminate\Http\Response;

function apiResponse(mixed $data = [], string $message = '', int $code = 200)
{
    return (new ApiResourceCollection($data, Lang::get($message), $code))
        ->response()
        ->setStatusCode($code);
}

function successResponse(mixed $data = [], string $message = '')
{
    return apiResponse($data, $message);
}

function createdResponse(mixed $data = [], string $message = '')
{
    return apiResponse($data, $message, Response::HTTP_CREATED);
}

function failResponse(mixed $data = [], string $message = '')
{
    return apiResponse($data, $message, Response::HTTP_BAD_REQUEST);
}

function notFoundResponse(mixed $data = [], string $message = '')
{
    return apiResponse($data, $message, Response::HTTP_NOT_FOUND);
}

function unAuthorizedResponse(mixed $data = [], string $message = '')
{
    return apiResponse($data, $message, Response::HTTP_UNAUTHORIZED);
}

