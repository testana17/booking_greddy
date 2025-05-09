@extends('admin.home')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Edit Transaksi</h6>
        <a href="{{ route('transaction') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('transaction.update', $transaction->id) }}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <!-- Customer Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Customer Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="invoice">Invoice Number</label>
                                <input type="text" class="form-control" id="invoice" value="{{ $transaction->invoice }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $transaction->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $transaction->phone_number) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $transaction->instagram) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $transaction->email) }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Booking Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Booking Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="package_id">Package</label>
                                <select class="form-control" id="package_id" name="package_id" required>
                                    @foreach($packages as $package)
                                        <option value="{{ $package->id }}" {{ old('package_id', $transaction->package_id) == $package->id ? 'selected' : '' }}>
                                            {{ $package->name }} - Rp {{ number_format($package->price, 0, ',', '.') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="booking_date">Booking Date</label>
                                <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date', $transaction->booking_date ? date('Y-m-d', strtotime($transaction->booking_date)) : '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="booking_time">Booking Time</label>
                                <input type="time" class="form-control" id="booking_time" name="booking_time" value="{{ old('booking_time', $transaction->booking_time) }}">
                            </div>

                            <div class="form-group">
                                <label for="event_address">Event Address</label>
                                <textarea class="form-control" id="event_address" name="event_address" rows="3">{{ old('event_address', $transaction->event_address) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Payment Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_price">Total Price (Rp)</label>
                                <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" value="{{ old('total_price', $transaction->total_price) }}" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="deposit_amount">Deposit Amount (Rp)</label>
                                <input type="number" step="0.01" class="form-control" id="deposit_amount" name="deposit_amount" value="{{ old('deposit_amount', $transaction->deposit_amount) }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="remaining_amount">Remaining Amount (Rp)</label>
                                <input type="number" step="0.01" class="form-control" id="remaining_amount" name="remaining_amount" value="{{ old('remaining_amount', $transaction->remaining_amount) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_payment">Payment Status</label>
                        <select class="form-control" id="status_payment" name="status_payment" required>
                            <option value="unpaid" {{ old('status_payment', $transaction->status_payment) == 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                            <option value="partial" {{ old('status_payment', $transaction->status_payment) == 'partial' ? 'selected' : '' }}>Partial</option>
                            <option value="complete" {{ old('status_payment', $transaction->status_payment) == 'complete' ? 'selected' : '' }}>Complete</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <button type="submit" class="btn btn-primary px-5">Update Transaction</button>
            </div>
        </form>

        <!-- Delete Form -->
        {{-- <div class="text-center">
            <form method="POST" action="{{ route('transaction.destroy', $transaction->id) }}" onsubmit="return confirm('Are you sure you want to delete this transaction? This action cannot be undone.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Transaction</button>
            </form>
        </div> --}}
    </div>
</div>

@push('scripts')
<script>
    // Calculate remaining amount when total price or deposit amount changes
    $(document).ready(function() {
        function calculateRemaining() {
            const totalPrice = parseFloat($('#total_price').val()) || 0;
            const depositAmount = parseFloat($('#deposit_amount').val()) || 0;
            const remainingAmount = totalPrice - depositAmount;

            $('#remaining_amount').val(remainingAmount.toFixed(2));
        }

        $('#total_price, #deposit_amount').on('input', calculateRemaining);
    });
</script>
@endpush
@endsection