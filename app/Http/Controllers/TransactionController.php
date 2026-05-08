<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Category;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('transactions.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Transaction::create([
            'category_id' => $request->category_id,
            'transaction_date' => $request->transaction_date,
            'amount' => $request->amount,
            'description' => $request->description,
            'account_id' => 1, // Sementara kita set 1 dulu
            
        ]);

        return redirect('/transactions')->with('success', 'Data berhasil disimpan!');
    }
}