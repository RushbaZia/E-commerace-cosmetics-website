@extends('admin.common.layout')
@section('content')

<h3 class="mb-4">My Reviews</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Product</th>
            <th>Rating</th>
            <th>Submitted</th>
        </tr>
    </thead>
    <tbody>
        @forelse($reviews as $review)
        <tr>
            <td>{{ $review->product->name }}</td>
            <td>
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa fa-star{{ $i <= $review->rating ? ' text-warning' : '-o' }}"></i>
                    @endfor
            </td>
            <td>{{ $review->created_at->diffForHumans() }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No reviews submitted yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection