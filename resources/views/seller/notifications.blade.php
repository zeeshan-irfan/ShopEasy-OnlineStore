@extends('layout.seller-main')

@section('main-content')


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="row bg-warning shadow">
                <div class="col-12 p-2 text-center">
                    <p class="h4">All Notifications<i class="bi bi-bell-fill"></i></p>
                 </div>
            </div>
            <div class="row bg-light ">
               
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-sm cart-item " >
                        <thead>
                          <tr>
                            
                            <th class="align-middle text-center" scope="col" style="min-width: 300px">Details</th>
                            <th class="align-middle text-center" scope="col">Remove </th>
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
                                <button class="btn btn-sm btn-danger rounded-0"><i class="bi bi-trash"></i></button>
                            </td>
                          </tr>
                          
                          @endfor

                    
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