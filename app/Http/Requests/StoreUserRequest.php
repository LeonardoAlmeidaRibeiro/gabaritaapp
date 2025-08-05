<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|min:3|max:200|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo E-Mail é obrigatório.',
            'email.unique' => 'Este E-Mail já está sendo utilizado.',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->messages()->all()[0],
                'success' => false
            ]);
        }
    }
}
