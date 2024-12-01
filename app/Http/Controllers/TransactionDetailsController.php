<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactiondetails_model;

class TransactionDetailsController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "transact";

        $transactionss = transactiondetails_model::where('tdet_delete', 0)->get();

        return view('pages.admin.transactiondetails.index', ['user' => $user, 'transactionss' => $transactionss]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "transact";
        return view('pages.admin.transactiondetails.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $transactionss = new transactiondetails_model();
        $transactionss->tdet_name = $validated['name'];
        $transactionss->save();

        return redirect()->route('admin.transactiondetails.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.transactiondetails.index');
        }

        $user = session()->get('user');
        $user->menu = "transact";

        $transact = transactiondetails_model::find($id);

        return view('pages.admin.transactiondetails.edit', ['user' => $user, 'transact' => $transact]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $transactionss = transactiondetails_model::find($validated['id']);
        $transactionss->tdet_name = $validated['name'];
        $transactionss->save();

        return redirect()->route('admin.transactiondetails.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.transactiondetails.index');
        }

        $transactionss = transactiondetails_model::find($id);
        $transactionss->tdet_delete = 1;
        $transactionss->save();

        return redirect()->route('admin.transactiondetails.index');
    }
}
