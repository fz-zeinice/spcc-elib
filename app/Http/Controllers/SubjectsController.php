<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subjects_model;

class SubjectsController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "subject";

        $subjects = subjects_model::where('subj_delete', 0)->get();

        return view('pages.admin.subjects.index', ['user' => $user, 'subjects' => $subjects]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "subject";
        return view('pages.admin.subjects.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $subjects = new booktypes_model();
        $subjects->subj_name = $validated['name'];
        $subjects->save();

        return redirect()->route('admin.subjects.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.subjects.index');
        }

        $user = session()->get('user');
        $user->menu = "subject";

        $subject = subjects_model::find($id);

        return view('pages.admin.subjects.edit', ['user' => $user, 'subject' => $subject]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $subjects = subjects_model::find($validated['id']);
        $subjects->subj_name = $validated['name'];
        $subjects->save();

        return redirect()->route('admin.subjects.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.subjects.index');
        }

        $subjects = subjects_model::find($id);
        $subjects->subj_delete = 1;
        $subjects->save();

        return redirect()->route('admin.subjects.index');
    }
}
