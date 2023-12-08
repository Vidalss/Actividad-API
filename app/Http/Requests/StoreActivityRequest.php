<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreActivityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name' => ['required'],
        'objective' => ['required'],
        'competence' => ['required'],
        'syllabus' => ['required'],
        'authorized' => ['required'],
        'activity' => ['required'],
        'credits' => ['required'],
        'period_id' => ['required'],
        'staff_id' => ['required'],
        'user_id' => ['required'],
        ];
    }
}
