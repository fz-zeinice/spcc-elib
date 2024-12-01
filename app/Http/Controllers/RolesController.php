<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles_model;

class RolesController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "roles";

        $roles = roles_model::where('rl_delete', 0)->get();

        return view('pages.admin.roles.index', ['user' => $user, 'roles' => $roles]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "role";
        return view('pages.admin.roles.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $roles = new roles_model();
        $roles->rl_name = $validated['name'];
        $roles->save();

        return redirect()->route('admin.roles.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.roles.index');
        }

        $user = session()->get('user');
        $user->menu = "roles";

        $roles = roles_model::find($id);

        return view('pages.admin.roles.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $roles = roles_model::find($validated['id']);
        $roles->rl_name = $validated['name'];
        $roles->save();

        return redirect()->route('admin.roles.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.roles.index');
        }

        $roles = roles_model::find($id);
        $roles->rl_delete = 1;
        $roles->save();

        return redirect()->route('admin.roles.index');
    }
}
