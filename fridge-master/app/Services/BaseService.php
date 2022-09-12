<?php

namespace App\Services;

class BaseService
{
    public function returnError(string $message = 'error'): array
    {
        return [
            'success' => false,
            'message' => $message
        ];
    }

    public function returnSuccess(string $message = 'success', array $models = []): array
    {
        return [
            'success' => true,
            'message' => $message,
            'models' => $models
        ];
    }
}
