<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StageProjectRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|max:255',
            'big_description' => 'required|max:2000',
            'link_video' => 'nullable|max:255',
            'link_instagram' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpeg,png',         
        ];
    }
    public function messages()
    {
        return [
            'image.mimes' => 'La imagen debe ser de tipo JPG o PNG.',
        ];
    }
   
}
