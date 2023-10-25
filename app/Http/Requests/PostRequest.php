<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
            'tag' => ['required', 'string', 'max:255'],
            'status' => ['required'],
            'category' => ['required'],
            'description' => ['required'],
            'thumbnail' => ['required', 'mimes:jpeg,jpg,png,gif'],
            'slide_image' => ['required', 'mimes:jpeg,jpg,png,gif'],
            'header_image' => ['required', 'mimes:jpeg,jpg,png,gif'],
        ];
    }
}
