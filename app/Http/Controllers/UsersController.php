<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_model;

class UsersController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "userr";

        $users = users_model::where('usr_delete', 0)->get();

        return view('pages.admin.users.index', ['user' => $user, 'users' => $users]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "userr";
        return view('pages.admin.users.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $users = new users_model();
        $users->usr_name = $validated['name'];
        $users->save();

        return redirect()->route('admin.users.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.users.index');
        }

        $user = session()->get('user');
        $user->menu = "userr";

        $userr = users_model::find($id);

        return view('pages.admin.users.edit', ['user' => $user, 'userr' => $userr]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $users = users_model::find($validated['id']);
        $users->usr_name = $validated['name'];
        $users->save();

        return redirect()->route('admin.users.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.users.index');
        }

        $users = users_model::find($id);
        $users->usr_delete = 1;
        $users->save();

        return redirect()->route('admin.users.index');
    }
}
