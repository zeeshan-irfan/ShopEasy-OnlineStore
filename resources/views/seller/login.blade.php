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

        <div class=" position-absolute top-50 start-50 translate-middle">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center p-4 bg-light shadow-lg rounded" style="min-width: 280px; max-width: 500px;">
                <div class="row mb-3">
                    <div class="col-12">
                        <img src="{{asset('storage/images/logo.png')}}" class="img-fluid" alt="Logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="heading-line">Login to your account</h4>
                    </div>
                    
                    <div class="col-12">
                        <form action="{{route('loginSeller')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" value="{{old('email')}}">
                                @error('email') 
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                              </div>

                             <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}">
                              @error('password') 
                              <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="rememberCheck" name="rememberCheck" {{ old('rememberCheck') ? 'checked' : '' }}>
                              <label class="form-check-label" for="rememberCheck">Remember me</label>
                            </div>
                           
                            <button type="submit" class="btn btn-warning">Sign in</button>  
                            <a href="{{route('sellerRegisterPage')}}" class="btn btn-sm ">Forgot password</a>
                            <hr>
                            <a href="{{route('sellerRegisterPage')}}" class="btn btn-sm btn-outline-primary">Register</a>
                            <span class="text-muted">OR</span>
                            <a href="{{route('home')}}" class="btn btn-sm btn-outline-primary">Switch Buying</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    
        <x-page-loader/>
        @if(session('alertType'))
            <x-alert-box :alert-type="session('alertType')" :alert-reason="session('alertReason')" :alert-message="session('alertMessage')" />
        @endif  
    </body>
    
</html>