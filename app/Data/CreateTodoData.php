<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class CreateTodoData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly ?string $description,
    ) {
    }

    public static function rules(): array
    {
        return [
            'title' => 'required',
        ];
    }

    public static function messages(): array
    {
        return [
            'title.required' => 'If there is no title, how this can be an todo?',
        ];
    }
}
