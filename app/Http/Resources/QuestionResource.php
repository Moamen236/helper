<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'question_en' => $this->question('en'),
            'question_ar' => $this->question('ar'),
            'ques_category_id ' => $this->ques_category_id,
            'ques_type_id' => $this->ques_type_id
        ];
    }
}