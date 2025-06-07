@extends('admin.common.layout')
@section('content')
<div class="container">
  <h2>Edit Order Status</h2>

  <form action="{{ route('shipping.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Tracking Number</label>
      <input type="text" class="form-control" value="{{ $order->tracking_no }}" disabled>
    </div>

    <div class="mb-3">
      <label class="form-label">Customer</label>
      <input type="text" class="form-control" value="{{ $order->fname }} {{ $order->lname }}" disabled>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select name="status" class="form-control">
        @foreach(\App\Models\Checkout::STATUSES as $key => $label)
        <option value="{{ $key }}" {{ $order->status === $key ? 'selected' : '' }}>
          {{ $label }}
        </option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('shipping.index') }}" class="btn btn-secondary">Back</a>
  </form>
</div>
@endsection