<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DollarRates extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Currency' => 'Dollar',
            'Date'=> $this->Date,
            'BUY' => $this->Dollar_BUY,
            'SELL' => $this->Dollar_SELL,
        ];
    }
}
