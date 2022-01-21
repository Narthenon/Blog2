<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Blog extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
        "id" => $this->id,
        "title" => $this->title,
        "description" => $this->description,
        "created_at" => $this->created_ad->format("m/d/Y"),
        "updated_at" => $this->tpdated_ad->format("m/d/Y")
        
        
    ];
    }
}
