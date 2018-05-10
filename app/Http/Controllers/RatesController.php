<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Rates as RatesResource;
use App\Http\Resources\DollarRates as DollarResource;
use App\Http\Resources\PoundsRates as PoundsResource;
use App\Rates;

class RatesController extends Controller{

    public function show_dollar(){
        return DollarResource::collection(Rates::all());
    }
    
    public function show_pounds(){
        return PoundsResource::collection(Rates::all());
    }

    public function show(){
        return RatesResource::collection(Rates::all());
    }
}
