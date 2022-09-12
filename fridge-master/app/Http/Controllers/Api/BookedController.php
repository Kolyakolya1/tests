<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\BookedRequest;
use App\Services\BookedService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\API\ApiController as Controller;


/**
 * Class BookedController
 * @package App\Http\Controllers\Api
 */
class BookedController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param BookedRequest $request
     * @param BookedService $bookedService
     * @return JsonResponse
     */
    public function store(BookedRequest $request, BookedService $bookedService): JsonResponse
    {
        $booked = $bookedService->createBooked($request);
        if($booked){
            return $this->returnSucces('Success', $booked);
        }else{
            return $this->returnError('Error creating');
        }
    }
}
