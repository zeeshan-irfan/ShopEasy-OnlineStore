@extends("layout.seller-main")



@section('main-content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12 p-2">
            <div class="bg-danger-subtle p-3  shadow text-center align-content-center">
                <h4 class="heading-line">Overall Seller Rating</h4>
                <h3>4/5</h3>
                <div id="starRating" class="star-rating">
                    <i class="text-warning bi bi-star-fill" data-value="1"></i>
                    <i class="text-warning bi bi-star-fill" data-value="2"></i>
                    <i class="text-warning bi bi-star-fill" data-value="3"></i>
                    <i class="text-warning bi bi-star-fill" data-value="4"></i>
                    <i class="text-warning bi bi-star" data-value="5"></i>
                </div>
                <p class="text-muted">Based on 1045 reviews</p>
            </div>
        </div>
        <div class="col-6 col-sm-4 p-2">
            <div class="bg-primary p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Orders Completed</h4>
                <h3>145</h3>
            </div>
        </div>
        
        <div class="col-6 col-sm-4 p-2">
            <div class="bg-primary p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Orders Processing</h4>
                <h3>2</h3>
            </div>
        </div>

        <div class="col-6 col-sm-4 p-2">
            <div class="bg-primary p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Orders Returned</h4>
                <h3>10</h3>
            </div>
        </div>
        <div class="col-6 col-sm-4 p-2">
            <div class="bg-success  p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Active Products</h4>
                <h3>30</h3>
            </div>
        </div>
        <div class="col-6 col-sm-4 p-2">
            <div class="bg-danger p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Out of Stock</h4>
                <h3>2</h3>
            </div>
        </div>
        <div class="col-6 col-sm-4 p-2">
            <div class="bg-success bg-gradient p-3  shadow text-center text-white align-content-center">
                <h4 class="heading-line">Store Following</h4>
                <h3>30</h3>
            </div>
        </div>
    </div>
</div>
    
@endsection


@push('jquery-script')
    
@endpush