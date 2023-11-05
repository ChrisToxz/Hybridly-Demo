<?php

namespace App\Data;

use App\Data\Toast\ToastData;
use Spatie\LaravelData\Data;

class SharedData extends Data
{
    public function __construct(
        public readonly SecurityData $security,
        public ?ToastData $toast,
    ) {
        if(session('toast')){
            $this->toast = new ToastData(...session('toast'));
        }
    }
}
