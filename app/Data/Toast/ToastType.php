<?php

namespace App\Data\Toast;

enum ToastType: string
{
    case info = 'info';
    case success = 'success';
    case warning = 'warning';
    case error = 'error';
}
