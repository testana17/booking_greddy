<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Packages;
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

    public function edit($id)
    {
        $transaction = Booking::with(['package', 'details', 'payments'])
            ->findOrFail($id);

        $packages = Packages::all();

        return view('admin.transaction.edit', [
            'transaction' => $transaction,
            'packages' => $packages
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'instagram' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'package_id' => 'required|exists:packages,id',
            'booking_date' => 'required|date',
            'booking_time' => 'nullable|string',
            'event_address' => 'nullable|string',
            'status_payment' => 'required|in:partial,complete,unpaid',
            'total_price' => 'required|numeric|min:0',
            'deposit_amount' => 'nullable|numeric|min:0',
            'remaining_amount' => 'nullable|numeric|min:0',
        ]);

        $transaction = Booking::findOrFail($id);

        $transaction->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'instagram' => $request->instagram,
            'email' => $request->email,
            'package_id' => $request->package_id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'event_address' => $request->event_address,
            'status_payment' => $request->status_payment,
            'total_price' => $request->total_price,
            'deposit_amount' => $request->deposit_amount,
            'remaining_amount' => $request->remaining_amount,
        ]);

        // Update full_payment_at timestamp if payment is complete
        if ($request->status_payment == 'complete' && !$transaction->full_payment_at) {
            $transaction->update(['full_payment_at' => now()]);
        }

        return redirect()->route('transaction.show', $transaction->id)
            ->with('success', 'Transaction updated successfully');
    }

    public function destroy($id)
    {
        $transaction = Booking::findOrFail($id);

        // Delete related records (payments should be deleted by cascade)
        $transaction->delete();

        return redirect()->route('transaction')
            ->with('success', 'Transaction deleted successfully');
    }
}