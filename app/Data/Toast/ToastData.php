<?php

namespace App\Data\Toast;

use Spatie\LaravelData\Data;

class ToastData extends Data
{
    public function __construct(
      public readonly ToastType $type,
      public readonly string $body,
    ) {}
}
