<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbooksController extends Controller
{
    public function ebooks()
    {
        return view('pages.ebooks');
    }
}
