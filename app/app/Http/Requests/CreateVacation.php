<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVacation extends FormRequest
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
            'vacation_month' => 'required|integer',
            'vacation_start' => 'required|date',
            'vacation_end' => 'required|date',
            'half_vacation' => 'required|string',
            'vacation_days' => 'required|string',
            'vacation_reason' => 'required|string',
            'clientcheck' => 'required|string',
        ];
    }
}
