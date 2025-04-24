<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Booking::with('package')
            ->latest()
            ->get();

        return view('admin.transaction.index', [
            'transactions' => $transactions
        ]);
    }

    public function show($id)
    {
        $transaction = Booking::with(['package', 'details', 'payments'])
            ->findOrFail($id);

        return view('admin.transaction.show', [
            'transaction' => $transaction
        ]);
    }
}