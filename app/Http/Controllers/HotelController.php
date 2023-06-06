<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotels;
use App\Models\RoomHotel;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HotelController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Hotel::all();
        return $this->successResponse($model);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    public function roomhotel(Request $request){
        $rules = [
            'hotel_id'=>'required|min:1',
            'room_id'=>'required|min:1',
            'amount'=>'required',
        ];
        $this->validate($request,$rules);
        $roomhotel = RoomHotel::create($request->all());
        return $this->successResponse($roomhotel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show(Hotels $hotels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotels $hotels)
    {
        //
    }
}
