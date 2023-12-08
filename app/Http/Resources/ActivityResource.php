<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        'name' => $this->name,
        'objective' => $this->objective,
        'competence' => $this->competence,
        'syllabus' => $this->syllabus,
        'authorized' => $this->authorized,
        'activity' => $this->activity,
        'credits' => $this->credits,
        'period_id' => $this->period_id,
        'staff_id' => $this->staff_id,
        'user_id' => $this->user_id,
        ];
    }

}
