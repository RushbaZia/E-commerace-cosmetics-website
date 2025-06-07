@extends('admin.common.layout')
@section('content')
<div class="container mt-4">
  <h3 class="mb-4">All User's Reviews</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>User</th>
        <th>Email</th>
        <th>Product</th>
        <th>Ratings</th>
        <th>Submitted At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($reviews as $review)
      <tr>
        <td>{{ $review->user->name }}</td>
        <td>{{ $review->user->email }}</td>
        <td>{{ $review->product->name }}</td>
        <td>
          @for ($i = 1; $i <= 5; $i++)
            <i class="fa fa-star{{ $i <= $review->rating ? ' text-warning' : '-o' }}"></i>
            @endfor
        </td>
        <td>{{ $review->created_at->format('d M Y, h:i A') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection