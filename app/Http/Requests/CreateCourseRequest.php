<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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

    public function messages()
    {
        return [
            'title.required' => 'فیلد عنوان الزامیست',
            'image.required' => 'فیلد عکس الزامیست',
            'image.mimes' => 'فرمت عکس اشتباه است',
            'shortText.required' => 'فیلد توضیحات الزامیست',
        ];
    }

    public function rules()
    {
        return [
           "title"=>"required|string|min:3|max:17",
            "shortText"=>"required|string|min:50|max:220",
            "image"=>"required|mimes:jpg,bmp,png",
            "price"=>"nullable|integer"
        ];
    }
}
