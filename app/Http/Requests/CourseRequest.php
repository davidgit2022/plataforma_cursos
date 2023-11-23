<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class CourseRequest extends FormRequest
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
            'title' => 'required|unique:courses,title',
            'description' => 'min:10',
            'price' => 'required|numeric',
            'image' => [
                File::image()
                    ->min(1024)
                    ->max(12 * 1024)
            ]
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'titúlo',
            'description' => 'descripción',
            'price' => 'precio',
            'image' => 'imagen',
        ];
    }

    public function messages() :array
    {
        return [
            'image.file' => 'El campo imagen debe ser un archivo de tipo: jpeg, png, gif.'
        ];
    }

}
