@extends('layout.seller-main')

@section('main-content')

<div class="container mt-3 p-2 bg-light shadow-lg rounded">
    <div class="row">
        <nav>
            <div class="nav nav-tabs fw-bold text-muted" id="nav-tab" role="tablist">
                <button class="nav-link @if (old('formTabView') == 'personalInfoForm') active @elseif(old('formTabView') == 'changePasswordForm')  @else active @endif" id="nav-personalInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-personalInfo" type="button" role="tab" aria-controls="nav-personalInfo" aria-selected="true">Personal Info <i class="bi bi-person-bounding-box"></i></button>
                <button class="nav-link @if(old('formTabView') == 'changePasswordForm') active @endif" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false">Password <i class="bi bi-gear-wide-connected"></i></button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">

       
            <div class="tab-pane fade @if (old('formTabView') == 'personalInfoForm') show active @elseif(old('formTabView') == 'changePasswordForm')  @else show active @endif  " id="nav-personalInfo" role="tabpanel" aria-labelledby="nav-personalInfo-tab" tabindex="0">
                <div class="container-fluid">
                    <form action="{{route('updateSeller')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="formTabView" value="personalInfoForm">
                        <div class="row">
                            <div class="col-12 p-2 text-center">
                                <h4 class="heading-line">Edit Personal Information</h4>
                            </div>
                            
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <img  id="previewImage" src="@if (isset(Auth::guard('seller')->user()->image->url))
                                            {{asset(Auth::guard('seller')->user()->image->url)}}
                                        @else
                                            {{asset('storage/images/person.svg')}}
                                        @endif" name='image' style="max-width: 100px" class="img-fluid" alt="">
                                    <br>
                                    <div class="mb-3">
                                        <label for="profileImage" class="form-label cursor-pointer">
                                            <i class="bi bi-pencil-square"> Upload new Image</i>
                                        </label>
                                        <input id="profileImage" class="form-control d-none @error('image') is-invalid @enderror" name="image" type="file" id="profileImage" >
                                        @error('image')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 px-md-5">
                                <input type="hidden" name="id" value="{{Auth::guard('seller')->User()->id}}" readonly>
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name" value="{{ old('name') ?? Auth::guard('seller')->user()->name ?? '' }}" >
                                    @error('name')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control disabled  @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="email" value="{{ old('email') ?? Auth::guard('seller')->user()->email ?? '' }}" readonly>
                                    @error('email')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="contact" class="form-label fw-bold">Contact</label>
                                    <input type="number" class="form-control  @error('contact') is-invalid @enderror" name="contact" id="contact" aria-describedby="contact" value="{{ old('contact') ?? Auth::guard('seller')->user()->address->contact ?? '' }}">
                                    @error('contact')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label fw-bold">Address</label>
                                    <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address" id="address" aria-describedby="address" placeholder="Address Line ..." value="{{ old('address') ?? Auth::guard('seller')->user()->address->address ?? '' }}">
                                    @error('address')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <input type="text" class="form-control  @error('province') is-invalid @enderror" name="province" id="province" aria-describedby="province" placeholder="State/Province" value="{{ old('province') ?? Auth::guard('seller')->user()->address->province ?? '' }}">
                                        @error('province')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <input type="text" class="form-control  @error('city') is-invalid @enderror" name="city" id="city" aria-describedby="city" placeholder="City" value="{{ old('city') ?? Auth::guard('seller')->user()->address->city ?? '' }}">
                                        @error('city')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <input type="number" class="form-control  @error('postal_code') is-invalid @enderror" name="postal_code" id="postal_code" aria-describedby="postal_code" placeholder="Postal code" value="{{ old('postal_code') ?? Auth::guard('seller')->user()->address->postal_code ?? '' }}">
                                        @error('postal_code')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <input type="text" class="form-control  @error('country') is-invalid @enderror" name="country" id="country" aria-describedby="country" placeholder="Country" value="{{ old('country') ?? Auth::guard('seller')->user()->address->country ?? '' }}">
                                        @error('country')
                                        <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-md-5 text-end mt-3">
                                    <button class="btn btn-warning">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade @if(old('formTabView') == 'changePasswordForm') show active @endif" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-2 text-center">
                            <h4 class="heading-line">Change Account Password</h4>
                        </div>
                        <div class="col-12 px-md-5">
                            <form  action="{{route('updateSellerPassword')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <input type="hidden" name="formTabView" value="changePasswordForm">
                                <div class="mb-3">
                                    <label for="old_password" class="form-label fw-bold">Old Password</label>
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" value="{{ old('old_password') ?? '' }}" >
                                    @error('old_password')
                                    <div class="form-text invalid-feedback">{{$message}}</div>
                                    @enderror
                                  </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label fw-bold">New Password</label>
                                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') ?? '' }}">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label fw-bold">Confirm New Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') ?? '' }}">
                                        @error('password')
                                            <div class="form-text invalid-feedback">{{$message}}</div>
                                        @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-warning text-end">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection

@push('jquery-script')
<script>
$(document).ready(function () {

    // Listen for the change event on the file input
    $('#profileImage').change(function(event) {
        // Ensure a file was selected
        if (event.target.files && event.target.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                // Set the src attribute of the image to the loaded file
                $('#previewImage').attr('src', e.target.result);
            };

            // Read the file as a data URL
            reader.readAsDataURL(event.target.files[0]);
        }
    });
});
</script>
@endpush