<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'long' => $this->long,
            'lat' => $this->lat,
            'address_line_1' => $this->address_line_1,
            'address_line_2' => $this->address_line_2,
            'surbub' => $this->surbub,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'opens' => $this->opens,
            'closes' => $this->closes,
            'category_id' => $this->category_id,
            'visits' => $this->visits,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category' => new CategoryResource($this->whenLoaded('category'))
        ];
    }
}