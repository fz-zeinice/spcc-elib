<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicalController extends Controller
{
    public function physicalbooks()
    {
        return view('pages.physicalbooks');
    }
}
