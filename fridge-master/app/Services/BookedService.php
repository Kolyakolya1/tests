<?php
namespace App\Services;

use App\Http\Requests\BookedRequest;
use App\Models\Booked;

final class BookedService extends BaseService
{

    public function createBooked(BookedRequest $request): ?Booked
    {
        $data = $request->validated();

        // stub function
        $booked = new Booked();
        $booked->status = true;
        $booked->costs = 10000;
        $booked->code = bin2hex(random_bytes(6));
//        $booked->save();
        if($booked){
            return $booked;
        }
        return null;

    }

}
