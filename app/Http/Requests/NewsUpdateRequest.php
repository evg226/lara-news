<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required','string','min:5','max:50'],
            'image' => ['required','string'],
            'description'=>['nullable'],
            'content' => ['required','string'],
            'author' => ['required','string','min:5','max:50'],
            'category_id'=>['required','integer','min:1','exists:categories,id'],
            'status'=>['required','string','min:5','max:7']
        ];
    }
}
