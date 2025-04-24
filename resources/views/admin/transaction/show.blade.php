@extends('admin.home')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Transaction Detail</h6>
        <a href="{{ route('transaction') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Customer Information
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th width="35%">Invoice</th>
                                <td>: {{ $transaction->invoice }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>: {{ $transaction->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>: {{ $transaction->phone_number }}</td>
                            </tr>
                            @if($transaction->email)
                            <tr>
                                <th>Email</th>
                                <td>: {{ $transaction->email }}</td>
                            </tr>
                            @endif
                            @if($transaction->instagram)
                            <tr>
                                <th>Instagram</th>
                                <td>: {{ $transaction->instagram }}</td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Booking Information
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th width="35%">Package</th>
                                <td>: {{ $transaction->package->name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>: {{ date('d M Y', strtotime($transaction->booking_date)) }}</td>
                            </tr>
                            @if($transaction->booking_time)
                            <tr>
                                <th>Time</th>
                                <td>: {{ date('H:i', strtotime($transaction->booking_time)) }}</td>
                            </tr>
                            @endif
                            @if($transaction->event_address)
                            <tr>
                                <th>Address</th>
                                <td>: {{ $transaction->event_address }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th>Status</th>
                                <td>:
                                    @if($transaction->status_payment == 'complete')
                                        <span class="badge badge-success">Complete</span>
                                    @elseif($transaction->status_payment == 'partial')
                                        <span class="badge badge-warning">Partial</span>
                                    @else
                                        <span class="badge badge-danger">Unpaid</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                Payment Information
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="25%">Total Price</th>
                        <td>: Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                    </tr>
                    @if($transaction->deposit_amount)
                    <tr>
                        <th>Deposit Amount</th>
                        <td>: Rp {{ number_format($transaction->deposit_amount, 0, ',', '.') }}</td>
                    </tr>
                    @endif
                    @if($transaction->remaining_amount)
                    <tr>
                        <th>Remaining Amount</th>
                        <td>: Rp {{ number_format($transaction->remaining_amount, 0, ',', '.') }}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>Payment Status</th>
                        <td>:
                            @if($transaction->status_payment == 'complete')
                                <span class="badge badge-success">Complete</span>
                            @elseif($transaction->status_payment == 'partial')
                                <span class="badge badge-warning">Partial</span>
                            @else
                                <span class="badge badge-danger">Unpaid</span>
                            @endif
                        </td>
                    </tr>
                    @if($transaction->full_payment_at)
                    <tr>
                        <th>Fully Paid On</th>
                        <td>: {{ date('d M Y H:i', strtotime($transaction->full_payment_at)) }}</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>

        @if($transaction->payments->count() > 0)
        <div class="card mb-4">
            <div class="card-header">
                Payment History
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Transaction ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaction->payments as $payment)
                            <tr>
                                <td>{{ date('d M Y H:i', strtotime($payment->created_at)) }}</td>
                                <td>
                                    @if($payment->payment_type == 'deposit')
                                        <span class="badge badge-info">Deposit</span>
                                    @elseif($payment->payment_type == 'remaining')
                                        <span class="badge badge-warning">Remaining</span>
                                    @elseif($payment->payment_type == 'full')
                                        <span class="badge badge-success">Full Payment</span>
                                    @endif
                                </td>
                                <td>Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                <td>
                                    @if($payment->status == 'success')
                                        <span class="badge badge-success">Success</span>
                                    @elseif($payment->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($payment->status == 'failed')
                                        <span class="badge badge-danger">Failed</span>
                                    @endif
                                </td>
                                <td>{{ $payment->transaction_id ?? '-' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        @if($transaction->details->count() > 0)
        <div class="card mb-4">
            <div class="card-header">
                Booking Details
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaction->details as $detail)
                            <tr>
                                <td>{{ $detail->package->name ?? 'N/A' }}</td>
                                <td>Rp {{ number_format($detail->price, 0, ',', '.') }}</td>
                                <td>{{ $detail->quantity ?? 1 }}</td>
                                <td>Rp {{ number_format($detail->price * ($detail->quantity ?? 1), 0, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection