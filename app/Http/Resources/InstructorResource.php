<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstructorResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'instructor_slug' => $this->instructor_slug,
            'contact_email' => $this->contact_email,
            'telephone' => $this->telephone,
            'mobile' => $this->mobile,
            'paypal_id' => $this->paypal_id,
            'link_facebook' => $this->link_facebook,
            'link_linkedin' => $this->link_linkedin,
            'link_twitter' => $this->link_twitter,
            'link_googleplus' => $this->link_googleplus,
            'biography' => $this->biography,
            'instructor_image' => $this->instructor_image,
            'total_credits' => $this->total_credits,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
