<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends Resource
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
            'name'=>$this->name,
            'price'=>$this->price,
            'discount'=>$this->discount,
            'rating'=>$this->reviews->count()>0? round($this->reviews->sum('star')/$this->reviews->count()):'No rating yeet',//round use to remove 0.0 into 0
            'href'=>[
                'link'=>route('products.show',$this->id)
            ]
        ];
    }
}
