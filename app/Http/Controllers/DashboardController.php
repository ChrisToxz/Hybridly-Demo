<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return hybridly('dashboard', [
            'items' => Todo::all()
        ]);
    }
}
