<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CalculatorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if(is_numeric($this->getResult())) {
            return [
                'success' =>true,
                'result' => $this->getResult(),
            ];
        } else {
            return [
                'success' =>false,
                'result' => "ERROR: params doesn't match the operation or the operation is not possible",
            ];
        }
        
    }
}
