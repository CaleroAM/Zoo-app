<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
			'id_employee' => 'required',
			'name' => 'required|string',
			'second_name' => 'required|string',
			'lastname' => 'required|string',
			'second_lastname' => 'required|string',
			'age' => 'required',
			'sex' => 'required|string',
			'type_emple' => 'required|string',
			'fk_shift' => 'required',
        ];
    }
}
