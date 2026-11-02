<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'slug' => 'nullable',
            'excerpt' => 'required|min:10',
            'body' => 'required|min:10',
            'is_published' => 'nullable',
            'published_at' => 'nullable',
            'user_id' => 'nullable',
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048']
        ];
    }

    public function messages(): array {
        return [
            'title.required' => 'Пожалуйста, введите заголовок.',
            'excerpt.required' => 'Пожалуйста, введите короткое превью.',
            'body.required' => 'Пожалуйста, введите короткое превью.',
            'image.image' => 'Файл должен быть в формате изображения.'
        ];
    }


}
