<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'email'=>['required', Rule::unique('users')->ignore($this->id)],
            'password' => 'required|min:6',

        ];

    }

    public function messages()
    {
        return [
          'name.required'=>'This name is required',
          'name.min'=>'Name must be more 3 letters',
          'name.max'=>'The name must be not to more than 100',
          'password.required'=>'The password is required',
          'password.min'=>'Password must be not less than 6 letters',
       ];

        }


}
