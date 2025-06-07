@extends('admin.common.layout')
@section('content')

<h3 class="mb-4">My Orders</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Tracking No</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->tracking_no }}</td>
            <td>${{ number_format($order->total, 2) }}</td>
            <td><span class="badge bg-info">{{ ucfirst($order->status) }}</span></td>
            <td>{{ $order->created_at->format('d M Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
