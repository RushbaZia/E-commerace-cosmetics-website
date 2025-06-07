@extends('admin.common.layout')
@section('content')
<h1>All Order Details</h1>
<div class="container">
   @if(session('success'))
            <div class="alert alert-success mt-3">{{session('success')}}</div>
            @endif
            @if(session('delete'))
            <div class="alert alert-danger mt-3">{{session('delete')}}</div>
            @endif
  <div class="col-lg-12">
    <table class="table">
      <thead>

        <tr>
          <th scope="col">S.N</th>
          <th scope="col">ORDER NO.</th>
          <th scope="col">NAME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">TOTAL AMOUNT</th>
          <th scope="col">STATUS</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $order)
        <tr>
          <th>{{ $order->id }}</th>
          <td>{{ $order->tracking_no }}</td>
          <td>{{ $order->fname }} {{ $order->lname }}</td>
          <td>{{$order->email}}</td>
          <td>${{ number_format($order->total, 2) }}</td>

          <td>
            @php
            $statusClasses = [
            'completed' => 'badge bg-success',
            'pending' => 'badge bg-warning text-dark',
            'processing' => 'badge bg-secondary',
            'decline' => 'badge bg-danger',
            ];
            @endphp

            <span class="{{ $statusClasses[$order->status] ?? 'badge bg-light text-dark' }}">
              {{ ucfirst($order->status) }}
            </span>
          </td>
          <td>
            <a href="{{ route('shipping.edit', $order->id) }}">
              <i class="fa-solid fa-pen text-success pe-3"></i>
            </a>
          </td>
          <td>
            <form action="{{ route('shipping.destroy', $order->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="border: none; background: none;">
                <i class="fa-solid fa-trash text-danger"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection