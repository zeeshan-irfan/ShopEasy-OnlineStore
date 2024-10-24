
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.png')}}">
    <title>ShopEasy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"   href="{{asset('css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
  

    <header class="header">

      {{-- Main Navigation Starts --}}
      <div class="container-fluid p-3 p-md-5 header-container">
        <div class="row">
          <div class="col-md-3">
            <img src="{{asset('storage/images/logo.png')}}" alt="Logo"  class="img-fluid">
          </div>
          {{-- Search Navigation Starts --}}
          <div class="col-md-6 my-auto">
            <div class="row">
              <div class="col-12">
                <form class="d-flex" role="search" id="main-search-bar">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="mainSearchBox">
                  <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
              </div>
              <div class="col-12 mt-3">
                <div class="col-md-10 mx-auto mb-0">
                  <ul class="nav main-nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">Buy</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('sellerLoginPage')}}">Sell</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Support</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          {{-- Search Navigation Ends --}}

          <div class="col-md-3 my-auto">
            <div class="row">
              <div class="col-6 col-md-12 mt-3">
                <div class="cart-links">
                  <ul class="nav justify-content-center ">
                    <li class="nav-item ">
                      <a class="nav-link position-relative cart-links-items text-warning  p-0 mx-2 m-lg-3" href="{{route('notifications')}}">
                        <i class="bi bi-bell">
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99
                            <span class="visually-hidden">Notifications Alert</span>
                          </span>
                        </i>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link position-relative  cart-links-items text-danger p-0 mx-2 m-lg-3" href="{{route('wishlist')}}">
                        <i class="bi bi-heart">
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            34
                            <span class="visually-hidden">Wishlist items</span>
                          </span>
                        </i>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link position-relative  cart-links-items text-white p-0 mx-2 m-lg-3" href="{{route('cart')}}">
                        <i class="bi bi-cart">
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            9
                            <span class="visually-hidden">Cart items</span>
                          </span>
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-12 d-flex justify-content-center mt-md-3">
                <div class="btn-group">
                  <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="" src="{{asset('storage/images/person.svg')}}" width="30" height="30"  alt="Me">
                    
                    <span>Guest</span>
                  </button>
                  <ul class="dropdown-menu me-2">
                    <li><a class="dropdown-item" href="{{route('profile')}}"><i class="bi bi-person"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('cart')}}"><i class="bi bi-cart"></i> My Cart</a></li>
                    <li><a class="dropdown-item" href="{{route('wishlist')}}"><i class="bi bi-heart"></i> Wishlist</a></li>
                    <li><a class="dropdown-item" href="{{route('notifications')}}"><i class="bi bi-bell"></i> Notifications</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-chat-dots"></i> Messages</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-center" href="{{route('login')}}"><i class="bi bi-box-arrow-right"> SignOut</i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Main Navigation Ends --}}
    </header>

      {{-- Sticky Navbar Starts --}}
      <div class="sticky-top z-1">
        <div class="container-fluid  header-container">
          <div class="row bg-dark">
            
            <div class="col-12">
              <ul class="nav main-nav">
                <li class="nav-item border-end border-warning">
                  <a id="MenuAccordionLink" class="nav-link py-0 py-sm-2 " data-bs-toggle="offcanvas" href="#sidemenubar" role="button" aria-controls="sidemenubar">
                    <i class="bi bi-list fs-5 "></i> All
                  </a>
                </li>
                <li class="nav-item align-content-center order-2 order-sm-1">
                  <a class="nav-link p-1 p-sm-2" href="#">New</a>
                </li>
                <li class="nav-item align-content-center order-2 order-sm-1">
                  <a class="nav-link p-1 p-sm-2" href="#">Popular</a>
                </li>
                <li class="nav-item align-content-center order-2 order-sm-1">
                  <a class="nav-link p-1 p-sm-2" href="#">Deals</a>
                </li>
                <li class="nav-item ms-auto  align-content-center order-1 order-sm-2">
                  <a class="btn btn-sm btn-outline-warning rounded-0" href="{{route('login')}}">Login/SignUp</a>
                </li>
                <li class="w-100 w-sm-0 order-1 order-sm-2"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
       {{-- Sticky Navbar Ends --}}

      
      {{-- Side Offcanvas Code Start --}}

      <div class="offcanvas offcanvas-start " tabindex="-1" id="sidemenubar" aria-labelledby="sidemenubarLabel">
        <div class="offcanvas-header bg-dark text-bg-dark">
          <h5 class="offcanvas-title " id="sidemenubarLabel">Explore All Categories</h5>
          <button  type="button " class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
          
          <div class="accordion accordion-flush" id="sideMenuAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Trending
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#sideMenuAccordion">
                <div class="accordion-body">
                  <ul class="nav flex-column">
                    <li class="nav-item ">
                      <a class="nav-link " href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Link</a>
                    </li>
                  
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mens
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#sideMenuAccordion">
                <div class="accordion-body">
                  <ul class="nav flex-column">
                    <li class="nav-item ">
                      <a class="nav-link " href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Link</a>
                    </li>
                  
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Women
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#sideMenuAccordion">
                <div class="accordion-body">
                  <ul class="nav flex-column">
                    <li class="nav-item ">
                      <a class="nav-link " href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Link</a>
                    </li>
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      {{-- Side Offcanvas Code Ends --}}

   
      @yield("main-content")


  


  <footer class="footer bg-dark p-3 pb-0 text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6">
          <img src="{{asset('storage/images/logo.png')}}" alt="Logo"  class="img-fluid">
        </div>
        <div class=" col-4 col-sm-2 mt-3 text-center">
          <ul class="nav flex-column " >
            <li class="nav-item mb-1">
              Follow us
            </li>
            <li class="nav-item">
              <a class="nav-link p-0" href="#"><i class="text-primary bi bi-linkedin"></i></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link p-0" href="#"><i class="text-primary bi bi-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0" href="#"><i class="text-danger bi bi-youtube"></i></a>
            </li>
           
          </ul>
        </div>
        <div class="col-4 col-sm-2 mt-3 text-center ">
          <ul class="nav flex-column " >
            <li class="nav-item mb-1">
              Our Services
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">Shopping</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">Bidding</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">Selling</a>
            </li>
          </ul>
        </div>
        <div class="col-4 col-sm-2 mt-3 text-center">
          <ul class="nav flex-column " >
            <li class="nav-item mb-1">
              Help Center
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0 text-secondary" href="#">Locations</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row ">
        <hr class="border border-warning m-0">
        <div class="col-12 text-center text-secondary mb-0">
          @Copyright to Zeeshan Irfan (zeeshanirfan131@gmail.com)
        </div>
      </div>
      
    </div>

  </footer>
   
  <x-page-loader/> 
  @if(session('alertType'))
  <x-alert-box :alert-type="session('alertType')" :alert-reason="session('alertReason')" :alert-message="session('alertMessage')" />
@endif  
    
</body>

<script src="{{asset("js/script.js")}}"></script>
@stack('jquery-script')

</html>