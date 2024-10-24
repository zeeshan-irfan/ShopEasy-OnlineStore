@extends('layout.main')

@section('main-content')

<div class="container mt-3 p-2 bg-light shadow-lg rounded">
    <div class="row">
        <nav>
            <div class="nav nav-tabs fw-bold text-muted" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="true">My Orders <i class="bi bi-bag-check-fill"></i></button>
                <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">My Reviews <i class="bi bi-stars"></i></button>
                <button class="nav-link " id="nav-personalInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-personalInfo" type="button" role="tab" aria-controls="nav-personalInfo" aria-selected="false">Personal Info <i class="bi bi-person-bounding-box"></i></button>
                <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false">Password <i class="bi bi-gear-wide-connected"></i></button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">


            

            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-2 text-center">
                            <h4 class="heading-line">All Orders</h4>
                        </div>
                       
                        <div class="col-12 table-responsive">
                            <table class="table table-striped table-sm cart-item " >
                                <thead>
                                    <tr>
                                    
                                    <th class="align-middle text-center" scope="col" style="min-width: 300px">Details</th>
                                    <th class="align-middle text-center" scope="col">Status </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                @for ($i =0 ; $i <8 ; $i++)
                                    
                                
                                    <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('storage/images/keyboard.jpg')}}" class="img-fluid img-thumbnail " alt="Product-image">
                                            <p class=" m-0">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non quia eius fuga eveniet laborum cumque est inventore molestias. Enim, veniam!
                                            </p>
                                        </div>
                                    </td>
                                    
                                    <td class="align-middle text-center">
                                        <i class="bi bi-check2-circle"> Delivered</i>
                                    </td>
                                    </tr>
                                    
                                    @endfor
        
                            
                                </tbody>
                                </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-2 text-center">
                            <h4 class="heading-line">Your Reviews</h4>
                        </div>
                        <div class="col-12 table-responsive">
                            <table class="table table-striped table-sm cart-item " >
                                <thead>
                                    <tr>
                                    
                                    <th class="align-middle text-center" scope="col" style="min-width: 300px">Product</th>
                                    <th class="align-middle text-center" scope="col">Review </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                @for ($i =0 ; $i <8 ; $i++)
                                    
                                
                                    <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('storage/images/keyboard.jpg')}}" class="img-fluid img-thumbnail " alt="Product-image">
                                            <p class=" m-0">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non quia eius fuga eveniet laborum cumque est inventore molestias. Enim, veniam!
                                            </p>
                                        </div>
                                    </td>
                                    
                                    <td class="align-middle text-center">
                                        <button class="btn btn-sm btn-success rounded-0"><i class="bi bi-pencil-square"></i></button>
                                    </td>
                                    </tr>
                                    
                                    @endfor
        
                            
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="nav-personalInfo" role="tabpanel" aria-labelledby="nav-personalInfo-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-2 text-center">
                            <h4 class="heading-line">Edit Personal Information</h4>
                        </div>
                        
                        <div class="col-12 d-flex justify-content-center">
                            <div>
                                <img src="{{asset('storage/images/person.svg')}}" style="max-width: 100px" class="img-fluid" alt="">
                                <br>
                                <div class="mb-3">
                                    <label for="profileImage" class="form-label cursor-pointer">
                                        <i class="bi bi-pencil-square"> Upload new</i>
                                    </label>
                                    <input class="form-control d-none" type="file" id="profileImage">
                                  </div>
                            </div>
                        </div>

                        <div class="col-12 px-md-5">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                                <div id="name" class="form-text text-danger">error message</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" id="email" aria-describedby="email">
                                <div id="email" class="form-text text-danger">error message</div>
                            </div>

                            <div class="mb-3">
                                <label for="contact" class="form-label fw-bold">Contact</label>
                                <input type="number" class="form-control" id="contact" aria-describedby="contact">
                                <div id="contact" class="form-text text-danger">error message</div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label fw-bold">Address</label>
                                <input type="text" class="form-control" id="address" aria-describedby="address">
                                <div id="address" class="form-text text-danger">error message</div>
                            </div>
                        </div>
                        <div class="col-12 px-md-5 text-end">
                            <button class="btn btn-warning">Save Changes</button>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-2 text-center">
                            <h4 class="heading-line">Change Account Password</h4>
                        </div>
                        <div class="col-12 px-md-5">
                            <form>
                                <div class="mb-3">
                                    <label for="oldPassword1" class="form-label fw-bold">Old Password</label>
                                    <input type="password" class="form-control" id="oldPassword1">
                                  </div>
                                <div class="mb-3">
                                  <label for="newPassword" class="form-label fw-bold">New Password</label>
                                  <input type="password" class="form-control" id="newPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordConfirm" class="form-label fw-bold">Confirm New Password</label>
                                    <input type="password" class="form-control" id="newPasswordConfirm">
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
    
});
</script>
@endpush