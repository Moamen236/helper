<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'date_of_birth' => $this->dob,
            'gender' => $this->gender,
            'no_of_bro' => $this->no_of_bro,
            'rank_btw_bro' => $this->arr_btw_bro,
            'caregiver_name' => $this->cg_name,
            'caregiver_relation' => $this->cg_relation,
            'caregiver_phone' => $this->cg_phone,
        ];
        // return parent::toArray($request);
    }
}