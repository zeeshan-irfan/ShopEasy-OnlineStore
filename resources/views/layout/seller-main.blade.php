
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
  

 {{-- Header Starts --}}
    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-12 col-sm-4">
                <img src="{{asset('storage/images/logo.png')}}" alt="Logo"  class="img-fluid">
            </div>
            <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">
                <h4 class="heading-line ">Seller Dashboard</h4>
            </div>

            <div class="col-12 col-sm-4 d-flex justify-content-center align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class="" src="@if (isset(Auth::guard('seller')->user()->image->url))
                        {{asset(Auth::guard('seller')->user()->image->url)}}
                      @else
                        {{asset('storage/images/person.svg')}}
                      @endif" width="30" height="30"  alt="Me">
                        
                      <span>
                      @auth('seller')
                        {{ Auth::guard('seller')->user()->name }}
                      @endauth
                       @guest('seller')
                         Guest
                       @endguest
                      </span>
                    </button>
                    <ul class="dropdown-menu me-2">
                      <li><a class="dropdown-item" href="{{route('sellerProfile')}}"><i class="bi bi-person"></i> My Profile</a></li>
                      <li><a class="dropdown-item" href="{{route('sellerNotifications')}}"><i class="bi bi-bell"></i> Notifications</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-chat-dots"></i> Messages</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-center" href="{{route('logoutSeller')}}"><i class="bi bi-box-arrow-right"> SignOut</i></a></li>
                    </ul>
                  </div>
            </div>
        </div>



       
    </div>
 {{-- Header Ends --}}
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-2 m-0 p-0">
           {{-- Navbar Starts --}}

        <nav class="navbar navbar-expand-sm bg-dark border-bottom border-body h-100" data-bs-theme="dark">
          <div class="container-fluid flex-sm-column align-items-sm-start  h-100">
          
            <a class="navbar-brand" href="#">Main Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigationBar" aria-controls="mainNavigationBar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse" id="mainNavigationBar">
              <ul class="navbar-nav  me-auto mb-2 mb-lg-0 flex-column h-100 ">
                <li class="nav-item ">
                  <a class="nav-link {{ Route::currentRouteName() == 'seller' ? 'active' : '' }}" aria-current="page" href="{{route('seller')}}">Home</a>
                </li>
                <li class="nav-item " >
                  <a class="nav-link" role="button" data-bs-toggle="collapse" href="#ordersCollapse" aria-expanded="false" aria-controls="ordersCollapse">
                    Orders <i class="bi bi-arrow-down-short"></i>
                  </a>
                  <ul class="collapse" id="ordersCollapse">
                    <li><a class="nav-link" href="#"><i class="bi bi-arrow-right-short"></i> Processing</a></li>
                    <li><a class="nav-link" href="#"><i class="bi bi-arrow-right-short"></i> Delivered</a></li>
                    <li><a class="nav-link" href="#"><i class="bi bi-arrow-right-short"></i> Returned</a></li>
                  </ul>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" role="button" data-bs-toggle="collapse" href="#productsCollapse" aria-expanded="false" aria-controls="productsCollapse">
                    Products <i class="bi bi-arrow-down-short"></i>
                  </a>
                  <ul class="collapse" id="productsCollapse">
                    <li><a class="nav-link {{Route::currentRouteName() == 'product.index' ? 'active' : ''}}" href="{{route('product.index')}}"><i class="bi bi-arrow-right-short"></i> Active</a></li>
                    <li><a class="nav-link" href="#"><i class="bi bi-arrow-right-short"></i> Out of Stock</a></li>
                    <li><a class="nav-link {{Route::currentRouteName() == 'product.create' ? 'active' : ''}}" href="{{route('product.create')}}"><i class="bi bi-arrow-right-short"></i> Add New</a></li>
                    <li><a class="nav-link {{Route::currentRouteName() == 'productDraft' ? 'active' : ''}}" href="{{route('productDraft')}}"><i class="bi bi-arrow-right-short"></i> Drafts</a></li>
                    
                  </ul>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == 'sellerNotifications' ? 'active' : '' }}" href="{{route('sellerNotifications')}}">Notifications</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Messages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == 'sellerProfile' ? 'active' : '' }}" href="{{route('sellerProfile')}}">Profile <i class="bi bi-gear-wide-connected"></i></a>
                </li>
                <li class="nav-item mt-3">
                  <a class=" btn btn-sm btn-danger " href="{{route('logoutSeller')}}"><i class="bi bi-box-arrow-right"> Logout</i></a>
                </li>
              </ul>
              {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
              </form> --}}
            </div>
          </div>
        </nav>

      {{-- Navbar Ends --}}
        </div>
        <div class="col-12 col-sm-8 col-md-10">
          @yield("main-content")
        </div>
      </div>
    </div>
      


  


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