<?php

namespace App\Http\Resources\Api;

use App\Models\Enum\UserEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'status' => UserEnum::getStatusName($this->status),
            'create_at' => (string)$this->created_at,
            'update_at' => (string)$this->update_at
        ];
//        return parent::toArray($request);
    }
}
