<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booktypes_model;

class BookTypesController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "booktype";

        $booktypes = booktypes_model::where('bt_delete', 0)->get();

        return view('pages.admin.booktypes.index', ['user' => $user, 'booktypes' => $booktypes]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "booktype";
        return view('pages.admin.booktypes.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $booktypes = new booktypes_model();
        $booktypes->bt_name = $validated['name'];
        $booktypes->save();

        return redirect()->route('admin.booktypes.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.booktypes.index');
        }

        $user = session()->get('user');
        $user->menu = "booktype";

        $booktype = booktypes_model::find($id);

        return view('pages.admin.booktypes.edit', ['user' => $user, 'booktype' => $booktype]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $booktypes = booktypes_model::find($validated['id']);
        $booktypes->bt_name = $validated['name'];
        $booktypes->save();

        return redirect()->route('admin.booktypes.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.booktypes.index');
        }

        $booktypes = booktypes_model::find($id);
        $booktypes->bt_delete = 1;
        $booktypes->save();

        return redirect()->route('admin.booktypes.index');
    }
}
