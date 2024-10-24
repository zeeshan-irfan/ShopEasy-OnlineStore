@extends('layout.main')

@section('main-content')


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="row bg-warning shadow">
                <div class="col-12 p-2 text-center">
                    <p class="h4">My Wishlist <i class="bi bi-heart-fill text-danger"></i></p>
                 </div>
            </div>
            <div class="row bg-light ">
               
                <div class="col-12 table-responsive">
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
                            <th class="align-middle text-center" scope="col">Add to Cart</th>
                            <th class="align-middle text-center" scope="col">Remove </th>
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
                                
                                <button class="btn btn-sm btn-success rounded-0"><i class="bi bi-cart-plus"></i></button>
                                
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-sm btn-danger rounded-0"><i class="bi bi-trash"></i></button>
                            </td>
                          </tr>
                          
                          @endfor

                          <tr>
                            <th class="align-middle text-center" scope="row " colspan="2"><p class="fs-6 p-0 m-0">Items Selected = 3</p></th>

                            <td class="align-middle text-center">
                                
                                <button class="btn btn-sm btn-success rounded-0 disabled"><i class="bi bi-cart-plus"></i></button>
                                
                            </td>
                            <td class="align-middle text-center">
                                <button class="btn btn-sm btn-danger rounded-0 disabled"><i class="bi bi-trash"></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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