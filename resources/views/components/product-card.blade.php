<div class="col-sm-6 col-md-4 col-lg-3 p-1">
    <div class="card rounded-0 shadow" >
      <img src="{{$productImgPath}}" class="img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title lh-1 truncate-4-lines"> {{$productTitle}}</h5>
        <div id="" class="star-rating">
            @for ($i =0 ; $i <5 ; $i++)
                @if ($i<$productReview)
                <i class="text-warning bi bi-star-fill" ></i>
                @else
                <i class="text-warning bi bi-star"></i>
                @endif
            
            @endfor
          <span class="fs-6 text-secondary">{{$productTotalreviews}}</span>
        </div>

        <h5>{{$productPrice}}$</h5>
        
        <div class="">
          <button class="btn btn-sm btn-outline-dark" data-id="{{$productId}}"><i class="bi bi-cart"> Add to cart</i></button>
          <button  class="btn btn-sm cardbtnHover" data-id="{{$productId}}"><i class="bi bi-wallet2"> Buy now</i></button>
          <button  class="btn btn-sm cardbtnHover" data-id="{{$productId}}"><i class="bi bi-heart"> Add to Wishlist</i></button>
          
        </div>
        
        
      </div>
    </div>
  </div>