<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'phone' => ['required', 'string', 'digits_between:9,11'],
            'address' => ['required', 'string'],
            'image' => ['nullable', 'string'],
            // 'role_id' => [
            //     'required', 
            //     Rule::exists('roles', 'id')->where(function ($query) {
            //         $query->where('name', '!=', 'admin');
            //     })  
            // ]
        ];
    }
}
