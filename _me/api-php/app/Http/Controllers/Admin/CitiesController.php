<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function index(City $city, $stateId)
    {
        $cities = $city
            ->whereStateId($stateId)
            ->orderBy('city')
            ->get();
        
        return response($cities);
    }
}
