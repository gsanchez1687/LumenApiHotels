<?php

namespace App\Http\Controllers;

use App\Models\RoomHotel;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class RoomHotelController extends Controller
{
    use ApiResponser;

    public function store(Request $request){
        $rules = [
            'hotel_id'=>'required|min:1',
            'room_id'=>'required|min:1',
            'amount'=>'required',
        ];
        $this->validate($request,$rules);
        //Consulto
        $roomhotel = RoomHotel::create($request->all());
        return $this->successResponse($roomhotel);
    }

    public function getroom($hotel){
        $model = RoomHotel::join("hotels", "hotels.id", "=", "rooms_hotels.hotel_id")
        ->join("rooms","rooms.id","=","rooms_hotels.room_id")
        ->join("cities","cities.id","=","hotels.city_id")
        ->select("rooms_hotels.amount as amountroom","rooms.name as nameroom","rooms.accommodation","rooms_hotels.created_at as roomcreate","rooms_hotels.updated_at as roomupdated")
        ->where("rooms_hotels.hotel_id", "=", $hotel)
        ->get();
        return $this->successResponse($model);
    }
}
