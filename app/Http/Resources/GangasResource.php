<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\User;

class GangasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'category' => Category::findOrFail($this->category)->name,
            'likes' => $this->likes,
            'unlikes' => $this->unlikes,
            'price' => $this->price,
            'price_sale' => $this->price_sale,
            'available' => $this->available,
            'user' => User::findOrFail($this->user_id)->name,
        ];
    }
}
