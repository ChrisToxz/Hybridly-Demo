<?php

namespace App\Data;

use Carbon\Carbon;
use Spatie\LaravelData\Data;

class TodoData extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly ?string $content,
        public readonly string $priority,
        public readonly Carbon $created_at
    ) {
    }
}
