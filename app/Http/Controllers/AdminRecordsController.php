<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRecordsController extends Controller
{
    public function adminrecords()
    {
        return view('pages.adminrecords');
    }
}
