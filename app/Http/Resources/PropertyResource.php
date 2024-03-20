<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category' => $this->category_id,
            'sub_category' => $this->sub_category_id,
            'title' => $this->title,
            'description' => $this->description,
            'price_type' => $this->price_type,
            'price' => $this->price,
        ];
    }
}
