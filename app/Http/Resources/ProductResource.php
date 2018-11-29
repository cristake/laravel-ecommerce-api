<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageResource;
use App\Http\Resources\ImageCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
			// 'id' => $this->id,
			'uuid' => $this->uuid,
			'brand' => new BrandResource($this->whenLoaded('brand')),
			'slug' => $this->slug,
			'status' => $this->status,
            'name' => $this->title,
            'rrp' => $this->price,
            'discount' => $this->discount,
            // 'currency' => $this->currency,
            // 'currency_symbol' => $this->currency_symbol,
			'description' => $this->description,
			'image' => new ImageResource($this->images()->first()),
			'images' => new ImageCollection($this->whenLoaded('images')),
			'categoryList' => new CategoryListResource($this->whenLoaded('categoryList')),
			'last_updated' => (string) $this->updated_at,
			'_self' => url("/api/products/{$this->slug}")
        ];
    }
}
