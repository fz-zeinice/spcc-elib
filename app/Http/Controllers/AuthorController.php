<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author_model;

class AuthorController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "author";

        $authors = author_model::where('aut_delete', 0)->get();

        return view('pages.admin.author.index', ['user' => $user, 'authors' => $authors]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "author";
        return view('pages.admin.author.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $author = new author_model();
        $author->aut_name = $validated['name'];
        $author->save();

        return redirect()->route('admin.auth.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.auth.index');
        }

        $user = session()->get('user');
        $user->menu = "author";

        $author = author_model::find($id);

        return view('pages.admin.author.edit', ['user' => $user, 'author' => $author]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $author = author_model::find($validated['id']);
        $author->aut_name = $validated['name'];
        $author->save();

        return redirect()->route('admin.auth.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.auth.index');
        }

        $author = author_model::find($id);
        $author->aut_delete = 1;
        $author->save();

        return redirect()->route('admin.auth.index');
    }
}
