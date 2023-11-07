<?php

namespace App\Data\Toast;

use PhpOption\Option;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ToastData extends Data
{
    public function __construct(
      public readonly ToastType $type,
      public readonly string $body,
      public readonly string $description
    ) {}
}
