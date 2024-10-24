
@extends('layout.main')
  {{-- Banner Starts --}}

  @section("main-content")
      
  

  <div class="container-fluid shadow bg-light p-sm-4 my-3 ">
    <div class="row">
      <div class="col-8  text-center align-content-center p-md-3">
        <div class="h1 fw-bold " id="banner-title">All of the Products and services at one place </div>
      </div>
      <div class="col-4 ">
        <div class="row">
          <div class="col-auto col-sm-6 mb-2 border-start border-3 border-warning banner-item">
            <h3 class="m-0">100+</h3>
            <p>Products</p>
          </div>
          <div class="col-auto col-sm-6 mb-2 border-start border-3 border-warning banner-item">
            <h3 class="m-0">1000+</h3>
            <p>Suppliers</p>
          </div>
          <div class=" col-auto col-sm-6 mb-2 border-start border-3 border-warning banner-item">
            <h3 class="m-0">50+</h3>
            <p>Countries</p>
          </div>
          <div class=" col-auto col-sm-6 mb-2 border-start border-3 border-warning banner-item">
            <h3 class="m-0">100+</h3>
            <p>Categories</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Banner Ends --}}

      

  {{-- Background Carousel Starts --}}
  <div class="position-relative ">
    <div class="container-fluid  position-absolute z-n1">
      <div class="row ">
        <div class="col-12 m-0 p-0">
          <div id="BackCarousel" class="carousel slide carousel-fade overflow-hidden " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img  src="{{asset('storage/images/slide3.jpg')}}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/images/slide2.jpg')}}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/images/slide3.jpg')}}" class="d-block w-100 carousel-img" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Background Carousel Ends --}}

  {{-- Explore Popular Categories Section Starts --}}
  <div class="container mb-4">
    <div class="row mt-0 mt-sm-5">
      <div class="col-12 h4 text-center mt-0 m-sm-3 main-headings rounded-3 pb-2">
        <p class="m-0">Explore Popular Categories</p>
      </div>
    </div>
    <div class="position-relative">
      <div id="square-menu" class="row flex-nowrap overflow-auto ">

        @for ($i=0; $i < 10; $i++)
        <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex justify-content-center square-contain">
          <a class="btn p-2 p-md-5 shadow border rounded-1  square-item" href="#">      
              <i class=" h1 bi bi-house" ></i>
              <p>House Hold</p>
          </a>
        </div>
        @endfor
        
      </div>
      <div class="position-absolute top-50 start-0 ">
        <button id="btn-scroll-right" class="btn"><i class="bi bi-arrow-left-circle-fill h1 text-warning"></i></button>
      </div>
      <div id="btn-scroll-left" class="position-absolute top-50 end-0">
        <button class="btn"><i class="bi bi-arrow-right-circle-fill h1 text-warning"></i></button>
      </div>
    </div>
  </div>

  {{-- Explore Popular Categories Section Ends --}}


  <div class="container-fluid mt-0 mt-sm-5" >
    <div class="row justify-content-center mx-3 mx-sm-0">

      {{-- Gaming Accessories Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Gaming Accessories</div>
            </div>
          </div>

          <div class="row my-auto">
            <div class="col-6 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/keyboard.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Keyboards</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/mouse.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Mouse</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/earbud.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Earbud</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/headphone.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Headphone</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Gaming Accessories Ends--}}

      {{-- Watches Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Best Watches</div>
            </div>
          </div>

          <div class="row my-auto"> 
            <div class="col-12 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/watch.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Best Watches Collection Here</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Watches Ends--}}

      {{-- Fashion Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Fashion</div>
            </div>
          </div>

          <div class="row my-auto">
            <div class="col-6 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/jeans.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Jeans</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/dress.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Dresses</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/summer.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Summer wear</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/shoes.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Shoes</p>
              </a>
            </div>
            
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Fashion Ends--}}

     

      {{-- Beauty Products Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Beauty Products</div>
            </div>
          </div>

          <div class="row my-auto">
            <div class="col-6 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/glossier.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Glossier</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/makeup-kit.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Makeup</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/oil.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Moisturizers</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/cream.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Glowing</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Beauty Products Ends--}}

       {{-- Books Starts--}}
       <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Books Collection</div>
            </div>
          </div>

          <div class="row my-auto"> 
            <div class="col-12 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/books.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Books Collection Here</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Books Ends--}}
      
      
      {{-- Travel Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Travelling</div>
            </div>
          </div>

          <div class="row my-auto">
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/bottle.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Bottles</p>
              </a>
            </div>
            
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/glasses.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Glasses</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/camera.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Cameras</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/bag.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Bags</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Travel Ends--}}

       {{-- For All Starts--}}
       <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Fashion for all</div>
            </div>
          </div>

          <div class="row my-auto">
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/family.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">All</p>
              </a>
            </div>
            
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/men.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Men</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn ">
                <img src="{{asset('storage/images/women.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">women</p>
              </a>
            </div>
            <div class="col-6 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/kids.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Kids</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- For All Ends--}}

      {{-- Toys Starts--}}
      <div class="col-sm-6 col-md-4 col-lg-3 p-2">
        <div class="container bg-light text-center shadow p-3 h-100  d-flex flex-column">
          <div class="row">
            <div class="col">
              <div class="h3 fw-bold heading-line">Toys for Kids</div>
            </div>
          </div>

          <div class="row my-auto"> 
            <div class="col-12 ">
              <a href="#" class="btn  ">
                <img src="{{asset('storage/images/toy.jpg')}}" class="img-fluid " alt="img1">
                <p class="fst-italic ">Best Toys Collection Here</p>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="#" class="btn btn-outline-dark rounded-0 ">View All</a>
            </div>
          </div>
        </div>
      </div>
      {{-- Toys Ends--}}

      

    </div>
  </div>

  @endsection


  @push('jquery-script')
      <script>
        $(document).ready(function(){

            var character = 0
            var title = $("#banner-title").html();
            $("#banner-title").html(" ");
            function BannerTitleAnimate(){
              if (character < title.length) {
                $('#banner-title').append(title[character]);  // Append the next character
                character++;
                setTimeout(BannerTitleAnimate, 100);  // Delay between characters (in milliseconds)
              }
              

            } BannerTitleAnimate();


            var scrollWidth = $('#square-menu').get(0).scrollWidth - $('#square-menu').outerWidth(true);
            var currentPosition = $("#square-menu").scrollLeft();
            var boxWidth = $('#square-menu').find(':first').width();

            function SlideSqMenu(slideto){
              $("#square-menu").animate({scrollLeft:(slideto)},300);
            }

            function scrollHorDiv(){

              if(currentPosition<scrollWidth){
                currentPosition+=10;
              }
              else{
                currentPosition=0;
              }
              SlideSqMenu(currentPosition);
              scrollTimeout = setTimeout(scrollHorDiv,200);
            }
            scrollHorDiv();

            $("#square-menu .square-contain").on("mouseover",function(){
              clearTimeout(scrollTimeout);
            });

            $("#square-menu .square-contain").on("mouseleave",function(){
              scrollHorDiv();
            });

            $("#btn-scroll-left,#btn-scroll-right").on('click',function(){
              clearTimeout(scrollTimeout);
              if($(this).attr('id')=="btn-scroll-left"){
                currentPosition=currentPosition+boxWidth;
              }
              else
              {
                currentPosition=currentPosition-boxWidth;
              }
              SlideSqMenu(currentPosition);
              }); 
              
        });

      </script>
  @endpush