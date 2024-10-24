@extends('layout.seller-main')

@section('main-content')

<div class="container shadow">
    <div class="row  mt-3">
        <div class="col-12">
            <h4 class="text-center heading-line">Drafts</h4>
        </div>
    </div>

    <div class="row">
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
                    <th class="align-middle text-center" scope="col">Publish</th>
                    <th class="align-middle text-center" scope="col">Delete </th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">

                @foreach ($products as $product)
                    
                
                
                  <tr class="">
                    <th class="align-middle text-center" scope="row">
                        <div class="form-check ">
                            <input class="form-check-input productCheck" type="checkbox" value="" id="check{{$product->id}}">
                            
                        </div>
                    </th>
                    <td class="align-middle">
                        <div class="d-flex align-items-center">
                            <img src="{{asset($product->images[0])}}" class="img-fluid img-thumbnail " alt="Product-image">
                            <p class="truncate-3-lines m-0">
                                {{$product->title}}
                            </p>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        
                        <a class="btn btn-sm btn-success rounded-0" href="{{route('publishProduct',$product->id)}}">Publish</a>
                        
                    </td>
                    <td class="align-middle text-center">
                        <form action="{{route('product.destroy',$product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger rounded-0"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                  </tr>
                  
                  @endforeach

                  <tr>
                    <th class="align-middle text-center" scope="row " colspan="2"><p class="fs-6 p-0 m-0">Items Selected = 3</p></th>

                    <td class="align-middle text-center">
                        
                        <button class="btn btn-sm btn-success rounded-0 disabled">Publish</button>
                        
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
    
@endsection

@push('jquery-script')
    
@endpush