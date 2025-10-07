@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Payments</h2>
    <a href="{{ route('payments.create') }}" class="btn btn-success">Add Payment</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tenant</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payments as $payment)
        <tr>
            <td>{{ $payment->tenant->name }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->created_at->format('Y-m-d') }}</td>
            <td>
                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this payment?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
