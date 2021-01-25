<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            "title" => "required|string|min:3|max:17",
            "shortText" => "required|string|min:50|max:220",
            "image" => "nullable|mimes:jpg,bmp,png",
            "price" => "nullable|integer"
        ];
    }

}
