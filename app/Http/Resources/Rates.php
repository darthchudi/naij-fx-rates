<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rates extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            [
                'id' => $this->id,
                'Currency' => 'Pounds',
                'Date'=> $this->Date,
                'BUY' => $this->Pounds_BUY,
                'SELL' => $this->Pounds_SELL,
            ],
            [
                'id' => $this->id,
                'Currency' => 'Dollar',
                'Date'=> $this->Date,
                'BUY' => $this->Dollar_BUY,
                'SELL' => $this->Dollar_SELL,
            ]
        ];
    }
}
