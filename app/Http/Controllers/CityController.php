<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Traits\ApiResponser;

class CityController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcities()
    {
        $model = City::all();
        return $this->successResponse($model);
    }
}
