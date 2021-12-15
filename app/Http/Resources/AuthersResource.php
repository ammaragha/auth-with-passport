<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthersResource extends JsonResource
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
        'id'=>(string)$this->id,
        'type'=>'authers',
        'attr'=>[
            'name'=>$this->name,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at
        ]];
    }
}
