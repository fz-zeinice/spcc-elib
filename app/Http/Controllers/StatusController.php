<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status_model;

class StatusController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "stat";

        $status = status_model::where('sts_delete', 0)->get();

        return view('pages.admin.status.index', ['user' => $user, 'status' => $status]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "stat";
        return view('pages.admin.status.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $status = new status_model();
        $status->sts_name = $validated['name'];
        $status->save();

        return redirect()->route('admin.status.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.status.index');
        }

        $user = session()->get('user');
        $user->menu = "stat";

        $stat = status_model::find($id);

        return view('pages.admin.status.edit', ['user' => $user, 'stat' => $stat]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $status = status_model::find($validated['id']);
        $status->sts_name = $validated['name'];
        $status->save();

        return redirect()->route('admin.status.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.status.index');
        }

        $status = status_model::find($id);
        $status->sts_delete = 1;
        $status->save();

        return redirect()->route('admin.status.index');
    }
}
