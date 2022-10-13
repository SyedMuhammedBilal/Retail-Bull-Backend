<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'sku' => $this->sku,
            'name' => $this->product_name,
            // 'prices' => $this->prices,
            'current_price' => $this->current_price,
            'inventories' => $this->inventories,
        ];


     // return parent::toArray($request);
    }
}
