<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HallRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ['required', 'min:3', 'max:50', 'unique:halls,name'],
            "location" => ['required', 'min:3', 'max:100', 'unique:halls,location'],
            "width" => ['required', 'integer'],
            "length" => ['required', 'integer'],
            "capacity" => ['nullable', 'integer'],
            "for" => ['required', 'in:men,women,men and women'],
            "price" => ['required', 'integer'],
            "description" => ['nullable', 'min:3'],
            "photos.*" => ['required', 'file', 'mimes:png,jpg,jpeg']
        ];
    }
}
