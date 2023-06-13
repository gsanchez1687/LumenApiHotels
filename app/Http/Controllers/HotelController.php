<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotels;
use App\Models\RoomHotel;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    use ApiResponser;
    
    public function index()
    {
        $model = Hotel::orderBy('id','DESC')->get();
        return $this->successResponse($model);
    }

   
    public function store(Request $request)
    {
        $rules = [
            'city_id'=>'required|min:1',
            'department_id'=>'required|min:1',
            'name'=>'required|unique:hotels|max:100',
            'address'=>'required|max:1000',
            'nit'=>'required|max:20',
            'email'=>'required|email|max:100',
            'status' => 'required'
        ];
        $this->validate($request,$rules);
        $hotel = Hotel::create($request->all());
        return $this->successResponse($hotel);
    }

    public function gethotel($hotel){

        $RoomHotelModel = RoomHotel::join("hotels", "hotels.id", "=", "rooms_hotels.hotel_id")
        ->join("rooms","rooms.id","=","rooms_hotels.room_id")
        ->join("cities","cities.id","=","hotels.city_id")
        ->select("hotels.name","hotels.nit","hotels.phone","hotels.address","hotels.email","hotels.amount","cities.name as city","rooms_hotels.amount as rhamount","rooms.name as nameroom","rooms.accommodation")
        ->where("rooms_hotels.hotel_id", "=", $hotel)
        ->get();
        return $this->successResponse($RoomHotelModel);
    }


    public function show($hotel){
        $model = Hotel::findOrFail($hotel);
        return $this->successResponse($model);
    }

  
    public function edit(Request $request)
    {
        
    }

   
    public function update(Request $request, Hotels $hotels)
    {
        //
    }

    
    public function destroy(Hotels $hotels)
    {
        //
    }
}
