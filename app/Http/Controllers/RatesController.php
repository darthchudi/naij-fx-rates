<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Rates as RatesResource;
use App\Rates;

class RatesController extends Controller{

    public function show(){
        return RatesResource::collection(Rates::all());
    }
}
