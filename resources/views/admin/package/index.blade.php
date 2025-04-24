@extends('admin.home')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Package</h6>
            <a href="{{ route('package.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Create
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($data as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td>{{ Str::limit($item->description, 50) }}</td>
                        <td>
                            <a href="{{ route('package.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('package.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No packages found</td>
                    </tr>
                    @endforelse

                    </tbody>
                </table>
                {{ $data->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
