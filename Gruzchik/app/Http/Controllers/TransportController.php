<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function transport()
    {
        return view('pages.transport');
    }
}
