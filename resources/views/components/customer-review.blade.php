@if ($userRating>0 && $userRating<6)

<div class="container">
    <div class="row shadow">
        {{-- Single Review Starts --}}
        <div class="col-12 ">
            <span class="fw-bolder"><i class="bi bi-person-lines-fill text-success fs-5"></i> {{$userName}}</span>
            <div class="star-rating mt-2">
                @for ($i =0 ; $i <5 ; $i++)
                    @if ($i<$userRating)
                    <i class="text-warning bi bi-star-fill" ></i>
                    @else
                    <i class="text-warning bi bi-star"></i>
                    @endif
                
                @endfor
            </div>

            @if($userReview)
                <p class="p-0">{{$userReview}}</p>
            @endif
            
            @if($reviewImages)
            <div class="review-thumbnails">
                @forelse ($reviewImages as $image)
                <img src="{{asset($image)}}" alt="Image 1" class="img-fluid">
                @empty
                    
                @endforelse
            </div>
            @endif
            
        </div>
        {{-- Single Review Ends --}}

        @if($sellerResponce)
            {{-- Seller Responce Starts --}}
            <div class="col-11 offset-1 shadow mt-2 bg-secondary-subtle">
                <span class="fw-bolder text-danger"><i class="bi bi-shop fs-5"></i> Seller Responce</span>
                <p class="p-0">{{$sellerResponce}}</p>
            </div>
        {{-- Seller Responce Ends --}}
        @endif
        
    </div>
</div>
@endif