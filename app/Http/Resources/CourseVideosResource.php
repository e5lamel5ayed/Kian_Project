<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseVideosResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'video_title' => $this->video_title,
            'video_name' => $this->video_name,
            'video_type' => $this->video_type,
            'duration' => $this->duration,
            'image_name' => $this->image_name,
            'video_tag' => $this->video_tag,
            'uploader_id' => $this->uploader_id,
            'course_id' => $this->course_id,
            'processed' => $this->processed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
