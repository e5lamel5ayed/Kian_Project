<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'instructor_id' => $this->instructor_id,
            'category_id' => $this->category_id,
            'instruction_level_id' => $this->instruction_level_id,
            'course_title' => $this->course_title,
            'course_slug' => $this->course_slug,
            'keywords' => $this->keywords,
            'overview' => $this->overview,
            'course_image' => $this->course_image,
            'thumb_image' => $this->thumb_image,
            'course_video' => $this->course_video,
            'duration' => $this->duration,
            'price' => $this->price,
            'strike_out_price' => $this->strike_out_price,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
