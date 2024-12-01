<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MybooksController extends Controller
{
    public function mybooks()
    {
        return view('pages.mybooks');
    }
}
