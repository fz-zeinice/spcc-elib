<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction_model;

class TransactionsController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $user->menu = "transaction";

        $transactions = transaction_model::where('trans_delete', 0)->get();

        return view('pages.admin.transactions.index', ['user' => $user, 'transactions' => $transactions]);
    }

    public function add()
    {
        $user = session()->get('user');
        $user->menu = "transaction";
        return view('pages.admin.transactions.add', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
        ]);

        $transactions = new transaction_model();
        $transactions->trans_name = $validated['name'];
        $transactions->save();

        return redirect()->route('admin.transactions.index');
    }

    public function edit(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.transactions.index');
        }

        $user = session()->get('user');
        $user->menu = "transaction";

        $transaction = transaction_model::find($id);

        return view('pages.admin.transactions.edit', ['user' => $user, 'transaction' => $transaction]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'id' => 'required|numeric',
        ]);

        $transactions = transaction_model::find($validated['id']);
        $transactions->subj_name = $validated['name'];
        $transactions->save();

        return redirect()->route('admin.transactions.index');
    }

    public function destroy(int $id)
    {
        if(empty($id))
        {
            return redirect()->route('admin.transactions.index');
        }

        $transactions = transaction_model::find($id);
        $transactions->trans_delete = 1;
        $transactions->save();

        return redirect()->route('admin.transactions.index');
    }
}
