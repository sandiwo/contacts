<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'group_id' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'avatar' => 'required|mimes:png,jpeg,jpg',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'note' => 'nullable',
            'description' => 'nullable'
        ];
    }
}
