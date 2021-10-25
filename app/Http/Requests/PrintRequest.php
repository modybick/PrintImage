<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrintRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == '/') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'img' => 'required|image|max:20480'
        ];
    }

    public function messages()
    {
        return [
            "required" => "画像が選択されていません",
            "image" => "指定されたファイルが画像ではありません",
            "max" => "ファイルが大きすぎます",
        ];
    }
}
