<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{

    public function __construct()
    {
        dd(Auth::user());
    }

    public function __invoke()
    {

        return hybridly('Info')->base('index');
    }
}
