
@extends('layout.main')

@section("main-content")

    <div class="container-fluid ">
        <div class="row">
          {{-- Popular Section Starts --}}
            <div class="col-12 col-sm-3 col-md-2  p-3 order-2 order-sm-1">
                <div class="row bg-light shadow p-2 h-100 flex-column">
                    <div class="col-12">
                        <div class="h5 my-3 text-center heading-line">Popular <i class="bi bi-fire"></i></div>
                    </div>
                    <div class="col-12 mt-2  border-bottom">
                      <label for="brand1" class="fw-bolder w-100 bg-secondary-subtle">Categories <i class="bi bi-bookmark-check"></i></label>
                      <ul class="nav flex-column align-items-center">
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">category 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">category 2</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 mt-2  border-bottom">
                      <label for="brand1" class="fw-bolder w-100 bg-secondary-subtle">Brands <i class="bi bi-shop"></i></label>
                      <ul class="nav flex-column align-items-center">
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">Brand 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">Brand 2</a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-12 mt-2  border-bottom">
                      <label for="brand1" class="fw-bolder w-100 bg-secondary-subtle">Sellers <i class="bi bi-person"></i></label>
                      <ul class="nav flex-column align-items-center">
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">Seller 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark p-0" href="#">Seller 2</a>
                        </li>
                      </ul>
                    </div>

                    
                </div>

            </div>
            {{-- Popular Section Ends --}}

            {{-- Main Products Section Starts --}}
            <div class="col-12 col-sm-9 col-md-10  p-3 order-1 order-sm-2">
                <div class="row">
                    <div class="col-12 ">
                        <nav class="nav nav-page-position fs-6" >
                            <a class="nav-link p-0 px-2" href="#">Home /</a>
                            <a class="nav-link p-0 px-2 disabled" href="#">Category /</a>
                            <a class="nav-link p-0  px-2 disabled" href="#" >Men</a>
                        </nav>
                        <hr class="m-0">
                        <div class="d-inline-flex justify-content-between w-100 ">
                          <h5 class="fw-bold">Showing Results</h5>

                          <button class="btn p-0 fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">Filter By <i class="bi bi-filter"></i></button>

                          <div class="offcanvas offcanvas-end " tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
                            <div class="offcanvas-header">
                              <h5 class="offcanvas-title text-center heading-line" id="filterOffcanvasLabel">Filter By <i class="bi bi-filter"></i></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                              <div class="row bg-light p-3">
                                <div class="col-12 mt-2  border-bottom">
                                    <ul class="nav flex-column text-center main-nav">
                                        <li class="nav-item">
                                            <a class="nav-link text-dark active" href="#">Best Match</a>
                                          </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" href="#">New</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link text-dark" href="#">Top Sales</a>
                                        </li>
                                        
                                        
                                      </ul>
                                </div>
                                
            
                                <div class="col-12 mt-2 border-bottom">
                                    <label for="starRating" class="form-label fw-bolder">Customer Reviews </label>
                                    <div id="starRating" class="star-rating">
                                        <i class="text-warning bi bi-star" data-value="1"></i>
                                        <i class="text-warning bi bi-star" data-value="2"></i>
                                        <i class="text-warning bi bi-star" data-value="3"></i>
                                        <i class="text-warning bi bi-star" data-value="4"></i>
                                        <i class="text-warning bi bi-star" data-value="5"></i>
                                      </div>
                                </div>
                                <div class="col-12 mt-2 border-bottom">
                                    <label for="price" class="form-label fw-bolder">Price Range: </label> USD
                                  
            
                                    <div class="input-group input-group-sm mb-3">
                                      <span class="input-group-text fst-italic fw-bolder">Min</span>
                                      <input type="number" class="form-control" placeholder="5" min="1" aria-label="minPrice">
                                      <span class="input-group-text fst-italic fw-bolder">Max</span>
                                      <input type="number" class="form-control" placeholder="1000" min="5" aria-label="maxPrice">
                                    </div>
                        
                                </div>
            
                                <div class="col-12 mt-2  border-bottom">
                                  <label for="brand1" class="fw-bolder ">Brands</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="brand1">
                                      <label class="form-check-label" for="brand1">
                                        Brand 1
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="brand2" checked>
                                      <label class="form-check-label" for="brand2">
                                          Brand 2
                                      </label>
                                    </div>
                              </div>
            
                                <div class="col-12 mt-2  border-bottom">
                                    <label for="seller1" class="fw-bolder">Sellers</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="seller1">
                                        <label class="form-check-label" for="seller1">
                                          Seller 1
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="seller2" checked>
                                        <label class="form-check-label" for="seller2">
                                            Seller 2
                                        </label>
                                      </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        
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

            {{-- Main Products Section Ends --}}
        </div>
    </div>

@endsection


@push('jquery-script')

<script>
    $(document).ready(function(){
      $('#price').on('input', function() {
        $('#rangeValue').text($(this).val());
      });
      var ratingValue = 0;

    // Handle mouse hover effect on stars
    $('#starRating i').on('mouseover', function() {
      var index = $(this).data('value');
      highlightStars(index);
    });

    // Handle mouse out to reset to current rating
    $('#starRating i').on('mouseout', function() {
      highlightStars(ratingValue);
    });

    // Handle click to set rating
    $('#starRating i').on('click', function() {
      ratingValue = $(this).data('value');
      $('#ratingValue').text(ratingValue);
      highlightStars(ratingValue);
    });

    // Function to highlight stars
    function highlightStars(rating) {
      $('#starRating i').each(function() {
        var starValue = $(this).data('value');
        if (starValue <= rating) {
          $(this).removeClass('bi-star').addClass('bi-star-fill');
        } else {
          $(this).removeClass('bi-star-fill').addClass('bi-star');
        }
      });
    }
});

</script>
    
@endpush