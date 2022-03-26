<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            //TODO Validation Задание: Добавить правила валидации для поля title
            // Поле обязательно
            // Строковое
            // Минимам 5 символов
            // Максимум 15 символов

            'title' => [
                'required',
                'string',
                'min:5',
                'max:15'
            ]
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title поле обязательна к заполнению!',
            'title.string' => 'Title поле обязательна должно быть строкой!',
            'title.min' => 'Title поле минимум 5 символов!',
            'title.max' => 'Title поле максимум 15 символов!',
        ];
    }
}
