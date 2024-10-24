@extends('layout.main')

@section('main-content')




  <div class="container-fluid mt-2">
    <div class="row bg-light p-3">
        <div class="col-12 col-sm-6 col-md-5">
            {{-- All images with variations Start --}}
            <div class="container-fluid image-details ">
                <!-- Main Image -->
                <div class="row justify-content-center">
                    <div class="col-12 p-0">
                        <img id="mainImage" src="{{asset('storage/images/keyboard.jpg')}}" alt="Main Image" class="main-img shadow">
                    </div>
                </div>
            
                <!-- Thumbnails -->
                <div class="row my-2 thumbnail-container">
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/keyboard.jpg')}}" alt="Image 1" class=" img-thumbnail thumbnail-img border-2 border-warning">
                    </div>
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/mouse.jpg')}}" alt="Image 2" class=" img-thumbnail thumbnail-img">
                    </div>
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/bag.jpg')}}" alt="Image 3" class=" img-thumbnail thumbnail-img">
                    </div>
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/women.jpg')}}" alt="Image 4" class=" img-thumbnail thumbnail-img">
                    </div>
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/men.jpg')}}" alt="Image 5" class=" img-thumbnail thumbnail-img">
                    </div>
                    <div class="col-2 d-flex justify-content-center p-0">
                        <img src="{{asset('storage/images/glasses.jpg')}}" alt="Image 6" class=" img-thumbnail thumbnail-img">
                    </div>
                </div>
            </div>

            {{-- All images with variations Ends --}}
        </div>
        <div class="col-12 col-sm-6 col-md-4 ">
            {{-- Products Details Start --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <p class="h5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, porro. Nesciunt pariatur commodi itaque eos quod in repudiandae, debitis ipsam, neque repellat quaerat adipisci nihil accusantium, incidunt dolorum asperiores explicabo!</p>
                        <div class="star-rating mt-2">
                            @for ($i =0 ; $i <5 ; $i++)
                                @if ($i<3)
                                <i class="text-warning bi bi-star-fill" ></i>
                                @else
                                <i class="text-warning bi bi-star"></i>
                                @endif
                            
                            @endfor
                          <span class="fs-6 text-secondary">4477 Ratings</span>
                        </div>
                        <p class="h4 mt-2">49.99$</p>
                        <button class="btn btn-primary rounded-0 m-2"><i class="bi bi-wallet2"></i> Buy Now</button>
                        <button class="btn btn-warning rounded-0 m-2"><i class="bi bi-cart"></i> Add to Cart</button>

                    </div>
                </div>
            </div>
            {{-- Products Details Ends --}}
        </div>
        <div class="col-12 col-sm-12  col-md-3">
            {{-- Side Information Start --}}
             <div class="container-fluid bg-body-secondary">
                <div class="row">
                    {{-- Delivery Info Start --}}
                    <div class="col-6 col-sm-4 col-md-12 product-side-info mt-3 shadow">
                        <p class="heading text-muted fw-bold">Delivery Options</p>
                        <p class="sub-heading "><i class="bi bi-wallet"> Cash on Delivery</i></p>
                        <p class="sub-heading"><i class="bi bi-cash"> Standard fee</i><b> 9.99$</b></p>
                        <p class="sub-heading"><i class="bi bi-geo-alt"> Deliver from</i></p>
                        <span class="sub-heading text-muted">California, USA</span>
                    </div>
                    {{-- Delivery Info Ends --}}

                    {{-- Return Info Start --}}
                    <div class="col-6 col-sm-4 col-md-12 product-side-info mt-3 shadow">
                        <p class="heading text-muted fw-bold">Return and Warranty</p>
                        <p class="sub-heading "><i class="bi bi-clock-history"> 14 days easy return</i></p>
                        <p class="sub-heading"><i class="bi bi-shield"> Warranty not available</i></p>
                    </div>
                    {{-- Return Info Ends --}}

                    {{-- Seller Info Start --}}
                    <div class="col-12 col-sm-4 col-md-12 product-side-info mt-3 shadow">
                        <p class="heading text-muted fw-bold">Sold by</p>
                        <p class="sub-heading ">Seller/Shop Name</p>
                        <p class="sub-heading "><button class="btn btn-sm btn-outline-primary rounded-0 border-0">Chat Now <i class="bi bi-chat-dots"></i></button></p>
                        
                        <div class="row text-center">
                            <div class="col-4 p-0 border d-flex flex-column justify-content-between">
                                <p class="view-heading text-muted">Seller Ratings</p>
                                <p class="heading ">88%</p>
                            </div>
                            <div class="col-4 p-0 border d-flex flex-column justify-content-between">
                                <p class="view-heading text-muted">Ship on Time</p>
                                <p class="heading ">88%</p>
                            </div>
                            <div class="col-4 p-0 border d-flex flex-column justify-content-between">
                                <p class="view-heading text-muted">Chat Response Rate</p>
                                <p class="heading ">88%</p>
                            </div>
                        </div>
                        
                    </div>
                    {{-- Seller Info Ends --}}
                </div>
             </div>
             {{-- Side Information Ends --}}
        </div>
    </div>
  </div>


  <div class="container-fluid mt-3 bg-light">

    {{-- All Rating Start --}}
    <div class="row">
        <div class="col-12 p-3 ">
            <p class="h4 text-muted fw-bold heading-line text-center">Rating and Reviews of this product</p>
        </div>
        <div class="col-6 text-center p-0">

            <span class="fs-2 text-secondary">4.4/5</span>
            <div class="star-rating mt-2 fs-2">
                @for ($i =0 ; $i <5 ; $i++)
                    @if ($i<4)
                    <i class="text-warning bi bi-star-fill" ></i>
                    @else
                    <i class="text-warning bi bi-star"></i>
                    @endif
                
                @endfor
            </div>
            <span class="fs-6 text-secondary">4477 Total Ratings</span>
        </div>

        <div class="col-6">
            @for ($m =4 ; $m >=0 ; $m--)
            <div class="star-rating mt-2">
                @for ($i =0 ; $i <5 ; $i++)
                    @if ($i<=$m)
                    <i class="text-warning bi bi-star-fill" ></i>
                    @else
                    <i class="text-warning bi bi-star"></i>
                    @endif
                
                @endfor
                <span class="fs-6 text-secondary">{{$m+1}}</span>
            </div>
            
            @endfor
        </div>
    </div>
     {{-- All Rating Ends --}}


     {{-- All Reviews Start --}}
     <div class="row">
        <div class="col-12 p-3 border-bottom ">
            <p class="fs-5 text-muted fw-bold">Reviews (193)</p>
        </div>

        <div class="col-12">
            @php
                $images = ['https://placehold.co/600x400.png','https://placehold.co/600x400.png','storage/images/keyboard.jpg']
            @endphp

            @for ($i =0 ; $i < 5; $i++)
            <x-customer-review 
            user-name="Anonmous User" 
            user-rating="3"  
            :review-images="$images"
            user-review="Customer added a review"
            seller-responce="This is seller Response"
             />
            @endfor
           


        </div>

     </div>
     {{-- All Reviews Ends --}}
  </div>

  <!-- Modal to show clicked Image in reviews Start-->
<div class="modal fade" id="reviewImageModal" tabindex="-1" aria-labelledby="reviewImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-5">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-header " style="border-bottom: none;">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center  d-flex justify-content-center align-items-center">
                <img src="" id="reviewModalImage" alt="Full-size image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Modal to show clicked Image in reviews Ends-->

{{-- You May Also Like Section Starts --}}
<div class="container-fluid">
    <div class="row mt-3 bg-light">
        <div class="col-12 p-3 ">
            <p class="h4 text-muted fw-bold heading-line text-center">You May Also Like</p>
        </div>

    </div>

    {{-- Products Start --}}
    <div class="row">
        @for ($i = 0; $i <16 ; $i++)
          <x-product-card 
          product-id="5" 
          product-imgPath="{{asset('storage/images/keyboard.jpg')}}"
          product-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consequatur corporis eius iusto a magni ipsa! Nihil ea quaerat voluptates ipsa id, doloribus eveniet, dicta, velit vero recusandae beatae ducimus culpa nisi quae neque. Quibusdam mollitia ratione, voluptates error unde, porro tempora nemo sed, sint quo totam sapiente alias modi!" 
          product-review='3' 
          product-totalreviews='4487' 
          product-price='49.99'/>
        @endfor
      </div>
      {{-- Products End --}}
</div>

{{-- You May Also Like Section Ends --}}
  

@endsection

@push('jquery-script')
<script>


    $(document).ready(function() {
    // When hovering over the thumbnail images
    $('.thumbnail-img').on("mouseover click",function() {
      // Get the src of the hovered thumbnail
      $('.thumbnail-img').removeClass("border-2 border-warning");
      var newSrc = $(this).attr('src');
      // Change the border to new image
      $(this).addClass("border-2 border-warning");
      // Change the src of the main image
      $('#mainImage').attr('src', newSrc);
    });

     // When any thumbnail image is clicked
     $('.review-thumbnails img').click(function(){
            // Get the source of the clicked image
            let imgSrc = $(this).attr('src');
            // Set the src attribute of the modal image to the clicked image's src
            $('#reviewModalImage').attr('src', imgSrc);
            // Show the modal
            $('#reviewImageModal').modal('show');
        });
  });

</script>
@endpush