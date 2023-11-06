<?php

namespace App\Data;

use App\Enums\TodoPriorityEnum;
use Spatie\LaravelData\Data;

class CreateTodoData extends Data
{
    public function __construct(
        public string $title,
        public ?string $content,
        public TodoPriorityEnum $priority,
        public ?string $due_date
    ) {
    }

    public static function rules(): array
    {
        return [
            'title' => 'required',
            'priority' => 'required',
        ];
    }

    public static function messages(): array
    {
        return [
            'title.required' => 'If there is no title, how this can be an todo?',
        ];
    }
}
