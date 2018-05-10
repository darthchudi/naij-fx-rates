<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PoundsRates extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Currency' => 'Pounds',
            'Date'=> $this->Date,
            'BUY' => $this->Pounds_BUY,
            'SELL' => $this->Pounds_SELL,
        ];    }
}
