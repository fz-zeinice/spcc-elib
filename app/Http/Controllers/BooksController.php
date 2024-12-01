<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books_model;

class BooksController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "books";

        $books = books_model::where('bk_delete', 0)->get();

        return view('pages.admin.books.index', ['user' => $user, 'books' => $books]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "books";
        return view('pages.admin.books.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $books = new books_model();
        $books->bk_name = $validated['name'];
        $books->save();

        return redirect()->route('admin.book.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.book.index');
        }

        $user = session()->get('user');
        $user->menu = "books";

        $book = books_model::find($id);

        return view('pages.admin.books.edit', ['user' => $user, 'book' => $book]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $books = books_model::find($validated['id']);
        $books->bk_name = $validated['name'];
        $books->save();

        return redirect()->route('admin.books.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.books.index');
        }

        $books = books_model::find($id);
        $books->bk_delete = 1;
        $books->save();

        return redirect()->route('admin.books.index');
    }
}
