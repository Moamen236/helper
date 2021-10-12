<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecialistResource extends JsonResource
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
            'serial_no' => $this->serial_no,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'user_data' => new UserResource($this->whenLoaded('user')),
            'patients' => PatientResource::collection($this->whenLoaded('patients'))
        ];
        // return parent::toArray($request);
    }
}