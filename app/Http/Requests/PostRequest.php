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
        $rules = [
            'title' => 'required', 'string', 'max:255',
            'sub_title' => 'required', 'string', 'max:255',
            'tag' => 'required', 'string', 'max:255',
            'status' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ];
            if ($this->getMethod() == 'POST') {
                $rules += ['thumbnail' => 'required |image|mimes:jpeg,png,jpg,gif,svg'];
                $rules += ['slide_image' => 'required |image|mimes:jpeg,png,jpg,gif,svg'];
                $rules += ['header_image' => 'required |image|mimes:jpeg,png,jpg,gif,svg'];
            }
            else{
                $rules += ['thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg'];
                $rules += ['slide_image' => 'image|mimes:jpeg,png,jpg,gif,svg'];
                $rules += ['header_image' => 'image|mimes:jpeg,png,jpg,gif,svg'];
            }

        return $rules;

    }
}
