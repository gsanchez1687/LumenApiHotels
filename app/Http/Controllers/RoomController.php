<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Traits\ApiResponser;

class RoomController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Room::where('status','=',1)->get();
        return $this->successResponse($model);
    }
}
