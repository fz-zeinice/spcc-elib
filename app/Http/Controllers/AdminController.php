<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "dashboard";
        return view('pages.admin.index', ['user' => $user]);
    }
}
