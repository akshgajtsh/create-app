<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'transportation_month' => 'required|integer',
            'work_days' => 'required|string',
            'transportation_confirm' => 'required|integer',
            'start_section' => 'required|string',
            'end_section' => 'required|string',
            'transportation_cost' => 'required|string',
        ];
    }
}
