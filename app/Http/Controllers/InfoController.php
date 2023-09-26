<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __invoke()
    {
        return hybridly('Info')->base('index');
    }
}
