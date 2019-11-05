<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'coustomer'=>$this->customer,
            'body'=>$this->review,
            'star'=>$this->star,
            'href'=>[
                'link'=>route('products.show',$this->id)
            ]
        ];
    }
}
