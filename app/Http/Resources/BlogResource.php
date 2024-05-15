<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "blog_title" => $this->blog_title,
            "blog_slug" => $this->blog_slug,
            "blog_image" => $this->blog_image,
            "description" => $this->description,
            "is_active" => $this->is_active,
            
        ];
    }
}
