<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WithdrawRequestResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "instructor_id" => $this->instructor_id,
            "paypal_id" => $this->paypal_id,
            "amount" => $this->amount,
            "status" => $this->status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
