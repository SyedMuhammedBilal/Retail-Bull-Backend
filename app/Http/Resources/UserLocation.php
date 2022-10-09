<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLocation extends JsonResource
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
            'company_id' => $this->company_id,
            'location_code' => $this->location_code,
            'location_name' => $this->location_name,
            'location_email' => $this->location_email,
            'location_address'=>$this->location_address,
            'location_phone_number'=>$this->location_phone_number,
            'locations'=>$this->pivot
        ];

       //  return parent::toArray($request);
    }
}
