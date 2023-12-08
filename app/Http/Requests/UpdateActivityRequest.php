<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateActivityRequest extends FormRequest
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
        $method = $this->method();
        if($method == 'PUT'){
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
        }else{
            return [
                'name' => ['sometimes','required'],
                'objective' => ['sometimes','required'],
                'competence' => ['sometimes','required'],
                'syllabus' => ['sometimes','required'],
                'authorized' => ['sometimes','required'],
                'activity' => ['sometimes','required'],
                'credits' => ['sometimes','required'],
                'period_id' => ['sometimes','required'],
                'staff_id' => ['sometimes','required'],
                'user_id' => ['sometimes','required'],
            ];
        }
    }
}
