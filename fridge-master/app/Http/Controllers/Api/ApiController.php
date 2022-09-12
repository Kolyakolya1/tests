<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    public function returnSucces(string $message = 'Succes', $models = [], int $status = 200): JsonResponse
    {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'models' => $models,
            ], $status);
    }

    public function returnError(string $message = 'Error', $models = [], int $status = 500): JsonResponse
    {
        return response()->json(
            [
                'success' => false,
                'message' => $message,
            ], $status);
    }
}
