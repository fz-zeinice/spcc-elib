<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booklogs_model;

class BookLogsController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "booklog";

        $booklogs = booklogs_model::where('bl_delete', 0)->get();

        return view('pages.admin.booklogs.index', ['user' => $user, 'booklogs' => $booklogs]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "booklog";
        return view('pages.admin.booklogs.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $booklogs = new booklogs_model();
        $booklogs->bl_name = $validated['name'];
        $booklogs->save();

        return redirect()->route('admin.booklogs.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.booklogs.index');
        }

        $user = session()->get('user');
        $user->menu = "booklog";

        $booklog = booklogs_model::find($id);

        return view('pages.admin.booklogs.edit', ['user' => $user, 'booklog' => $booklog]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $booklogs = booklogs_model::find($validated['id']);
        $booklogs->bt_name = $validated['name'];
        $booklogs->save();

        return redirect()->route('admin.booklogs.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.booklogs.index');
        }

        $booklogs = booklogs_model::find($id);
        $booklogs->bl_delete = 1;
        $booklogs->save();

        return redirect()->route('admin.booklogs.index');
    }
}
