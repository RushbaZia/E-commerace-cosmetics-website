@extends('admin.common.layout')
@section('content')
<center>
    <h1>All Products
        <a href="{{route('products.create')}}" class=" btn btn-warning mb-2">
            <i class="fa-solid fa-plus"></i>&nbsp;ADD NEW
        </a>
    </h1>
</center>
<div class="container">
    @if(session('status'))
    <div class="alert alert-success mt-3">{{session('status')}}</div>
    @endif

    @if(session('delete'))
    <div class="alert alert-danger mt-3">{{session('delete')}}</div>
    @endif
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">IMAGE</th>
                <th scope="col">QUANTITY</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">PRICE</th>
                <th scope="col">DETAILS</th>
                <th scope="col" colspan="2">ACTIONS</th>

            </tr>

        </thead>
        @foreach($product as $item)
        <tbody style="border:2px solid black;">
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <img src="/storage/{{$item->image}}" height="50px" width="50px" class="img-fluid">
                </td>
                <td>{{$item->quantity}}</td>
                <td>
                    <?php
                    $categories = $product->category;
                    ?>
                    @foreach($categories as $category)
                    {{$category->name}},
                    @endforeach
                </td>
                <td>{{$item->price}}</td>
                <td>{{$item->details}}</td>
                <td>
                    <a href="{{route('products.edit', [$item->id])}}" class="btn btn-outline-success">
                        <i class="fa-solid fa-pen"></i>&nbsp;Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('products.destroy', [$item->id])}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        @endforeach
    </table>
    <div>
        {{$product->links('pagination::bootstrap-5')}}
    </div>
</div>

@endsection