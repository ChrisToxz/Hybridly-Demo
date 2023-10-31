<?php

namespace App\Enums;

enum TodoPriorityEnum: string
{
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';

    public function label(): string{
        return match($this){
            static::Low => 'Low priority',
            static::Medium => 'Medium priority',
            static::High => 'High priority'
        };
    }

    public static function names(): array
    {
        return array_map(fn($enum) => $enum->name, static::cases());
    }
}
