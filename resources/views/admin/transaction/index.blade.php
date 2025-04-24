@extends('admin.home')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transaction List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Customer</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Total Price</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->invoice }}</td>
                        <td>{{ $transaction->name }}<br>{{ $transaction->phone_number }}</td>
                        <td>{{ $transaction->package->name }}</td>
                        <td>{{ date('d M Y', strtotime($transaction->booking_date)) }}</td>
                        <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                        <td>
                            @if($transaction->status_payment == 'complete')
                                <span class="badge badge-success">Complete</span>
                            @elseif($transaction->status_payment == 'partial')
                                <span class="badge badge-warning">Partial</span>
                            @else
                                <span class="badge badge-danger">Unpaid</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('transaction.show', $transaction->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No transactions found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection