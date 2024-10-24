@extends('layout.main')

@section('main-content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <div class="row bg-warning shadow">
                <div class="col-12 p-2 text-center">
                    <p class="h4">Cart <i class="bi bi-cart"></i></p>
                 </div>
            </div>
            <div class="row bg-light ">
               
                <div class="col-12 col-md-8 table-responsive">
                    <table class="table table-striped table-sm cart-item " >
                        <thead>
                          <tr class="">
                            <th class="text-center align-middle" scope="col align-items-center"> 
                                <div class="form-check text-nowrap">
                                    <input class="form-check-input" type="checkbox" value="All" id="selectallcart">
                                    <label class="p-1">All</label>
                                </div>
                            </th>
                            <th class="align-middle text-center" scope="col">Product</th>
                            <th class="align-middle text-center" scope="col">Price</th>
                            <th class="align-middle text-center" scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @for ($i =0 ; $i <8 ; $i++)
                            
                        
                          <tr class="">
                            <th class="align-middle text-center" scope="row">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    
                                </div>
                            </th>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('storage/images/keyboard.jpg')}}" class="img-fluid img-thumbnail " alt="Product-image">
                                    <p class="truncate-3-lines m-0">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non quia eius fuga eveniet laborum cumque est inventore molestias. Enim, veniam!
                                    </p>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="fw-bold h4">49.99$</span>
                                <div class="btn-group bg-secondary-subtle" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-outline-warning  text-dark border-0 " id="decrease-btn"><i class="bi bi-arrow-down fw-bold"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-dark" ><span id="quantity-input">1</span></button>
                                    <button type="button" class="btn btn-sm btn-outline-warning  text-dark border-0 " id="increase-btn"><i class="bi bi-arrow-up fw-bold"></i></button>
                                </div>
                                
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-sm btn-danger rounded-0"><i class="bi bi-trash"></i></button>
                            </td>
                          </tr>
                          
                          @endfor

                          <tr>
                            <th class="align-middle text-center" scope="row " colspan="3"><p class="fs-6 p-0 m-0">Items Selected = 3</p></th>

                
                            <td class="align-middle text-center">
                                <button class="btn btn-sm btn-danger rounded-0 disabled "><i class="bi bi-trash"></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <div class="row bg-warning-subtle py-5 px-sm-5">
                        <div class="col-8 col-sm-6 col-md-8">
                            <h5 class="">Items Selected</h5>
                        </div>
                        <div class="col-4 col-sm-6 col-md-4">
                            <h5 class="fw-bold">4</h5>
                        </div>
                        <div class="col-8 col-sm-6 col-md-8">
                            <h5 class="">Total Price</h5>
                        </div>
                        <div class="col-4 col-sm-6 col-md-4">
                            <h5 class="fw-bold">49.99$</h5>
                        </div>
                        <div class="col-8 col-sm-6 col-md-8">
                            <h5 class="">Delivery Charges</h5>
                        </div>
                        <div class="col-4 col-sm-6 col-md-4">
                            <h5 class="fw-bold">20$</h5>
                        </div>
                        <div class="col-8 col-sm-6 col-md-8 border-top">
                            <h5 class="">Total</h5>
                        </div>
                        <div class="col-4 col-sm-6 col-md-4 border-top">
                            <h5 class="fw-bold">60.99$</h5>
                            
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 align-content-center">
                            <h5 class="text-muted">Order Now</h5>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6">
                            <button class="btn btn-success  fw-bold ">Checkout <i class="bi bi-check-square"></i></button>
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
    let quantity = 1;

    $('#increase-btn').click(function () {
        quantity++;
        $('#quantity-input').html(quantity);
    });

    $('#decrease-btn').click(function () {
        if (quantity > 1) {
            quantity--;
            $('#quantity-input').html(quantity);
        }
    });
});
</script>
@endpush