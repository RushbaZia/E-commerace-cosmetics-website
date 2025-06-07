@foreach($products as $product)
<div class="col-md-3 mb-5">
  <div class="card" style="background-color: #fff; border: none; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    <div class="image-container" style="border-radius: 10px;">
      <img src="/storage/{{$product->image}}" class="img-fluid" style="width: 275px; height:183px;">
    </div>
    <div class="product-detail-container p-2">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="dress-name">{{$product->name}}</h5>
        <div class="d-flex flex-column mb-2">
          <span class="new-price">${{$product->price}}</span>
          <small class="old-price text-right">Left: {{$product->quantity}}</small>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center pt-1">
        <div>{{$product->details}}</div>
      </div>
      <div class="d-flex justify-content-between align-items-center pt-1">
        <h6 class="text-warning"><b>Rating:</b></h6>
        <div class="rating" data-product-id="{{ $product->id }}">
          @for ($i = 1; $i <= 5; $i++)
            <i class="fa fa-star rating-star" data-rating="{{ $i }}"></i>
            @endfor
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <p class="btn-holder">
          <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary ps-5 pe-5" role="button">Add to cart</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endforeach