@extends('layout.seller-main')

@section('main-content')

<div class="container shadow mt-3">
    <div class="row">
        <div class="col-12">
            <h4 class="text-center heading-line">Edit Product</h4>
        </div>
        
    </div>
    <div class="row">
        <div class="col-12">
            <form id="createProductForm" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="category" class="form-label fw-bold">Category</label>
                    <select id="category" name="category" class="form-select @error('category') is-invalid @enderror" aria-label="category">
                        <option value="">Open this select menu</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id}}" @if (old('category') == $item->id || $product->category_id == $item->id) selected @endif>{{ $item->name }}</option>
                        @endforeach
                      </select>
                    @error('category') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label fw-bold">Brand</label>
                    <select id="brand" name="brand" class="form-select @error('brand') is-invalid @enderror" aria-label="brand">
                        <option value="">Open this select menu</option>
                        @foreach ($brand as $item)
                        <option value="{{ $item->id}}" {{ old('brand') == $item->id || $product->brand_id==$item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                      </select>
                    @error('brand') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="productid" class="form-label fw-bold">Product Id</label>
                    <input type="text" class="form-control @error('productid') is-invalid @enderror" id="productid" name="productid" value="{{old('productid') ? old('productid') : $product->productid }}" placeholder="If Any">
                    @error('productid') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ? old('title') : $product->title}}">
                    @error('title') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{old('description') ? old('description') : $product->description}}</textarea>
                    @error('description') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="row mb-3">
                    <div class="">
                        <label for="sizeInput" class="form-label fw-bold">Available Sizes</label>
                        <input type="hidden" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{old('size') ? old('size') : implode(',',$product->size)}}" placeholder="No Size Specified" readonly>
                        <div id="sizeBox" class="p-2">
                            @if (!empty($product->size) && is_array($product->size))
                            @foreach ($product->size as $size)
                                <div><i class="bi bi-square-fill"></i> {{ $size }}</div>
                            @endforeach
                        @endif
                            
                        </div>
                        @error('size') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="col-sm-5 align-content-end">
                        <div class="input-group">
                            <input type="text" id="sizeInput" class="form-control" placeholder="Type size and press Add" aria-label="Colors" aria-describedby="sizeInputBtn">
                            <button class="btn btn-outline-success" type="button" id="sizeInputBtn">Add</button>
                            <button class="btn btn-sm btn-outline-danger" type="button" id="sizeClearBtn">Clear All</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="">
                        <label for="colorInput" class="form-label fw-bold">Available colors</label>
                        <input type="hidden" 
                            class="form-control @error('color') is-invalid @enderror" 
                            id="color" 
                            name="color" 
                            value="{{ old('color') ? old('color') : ($product->color ? implode(',', $product->color) : '') }}" 
                            placeholder="No Colors Specified" 
                            readonly>

                        
                        @error('color') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="col-sm-5 align-content-end">
                        <div id="colorBox" class="p-2">
                            @if (!empty($product->color) && is_array($product->color))
                                @foreach ($product->color as $color)
                                    <div style="color: {{ $color }};">
                                        <i class="bi bi-square-fill"></i> {{ $color }}
                                    </div>
                                @endforeach
                            @endif
                           
                        </div>
                        <div class="input-group">
                            <input type="text" id="colorInput" class="form-control" placeholder="Type color and press Add" aria-label="Colors" aria-describedby="colorInputBtn">
                            <button class="btn btn-outline-success" type="button" id="colorInputBtn">Add</button>
                            <button class="btn btn-sm btn-outline-danger" type="button" id="colorClearBtn">Clear All</button>
                        </div>
                    </div>
                </div>

                <label for="price" class="form-label fw-bold">Price</label>
                <div class="input-group mb-3">
                    <input type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price') ? old('price') : $product->price}}">
                    <span class="input-group-text" id="basic-addon2"> $ </span>
                    @error('price') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <label for="quantity" class="form-label fw-bold">Available Quantity</label>
                <div class="input-group mb-3">
                    
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{old('quantity') ? old('quantity') : $product->quantity}}">
                    <span class="input-group-text" id="basic-addon2"> Units </span>
                    @error('quantity') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="mb-3">
                    <input type="hidden" name="oldImagePath" value="{{old('oldImagePath') ? old('oldImagePath') : implode(',',$product->images) }}" readonly>
                    <label for="images" class="form-label fw-bold">Upload New images (Min 3 required)</label>
                    <input type="file" id="images" name="images[]" accept="image/*" class="form-control @error('images') is-invalid @enderror"  multiple>

                    {{-- <input type="file" class="form-control @error('image1') is-invalid @enderror" id="image1" value="{{old('image1')}}"> --}}
                    @error('images') <div class="form-text invalid-feedback">{{$message}}</div> @enderror
                </div>

            

                <div class="preview mb-3"> 
                    @foreach ($product->images as $image)
                    <img height="50px" width="50px" class="img-thumbnail" src="{{asset($image)}}"  />
                    @endforeach
                </div>
                <div class="mb-3">
                    <input class="btn btn-warning" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('jquery-script')

<script>
    $(document).ready(function () {
        // Image preview function
        function previewImages(input) {
            var files = input.files;
            var previewDiv = $('.preview');
            previewDiv.html(""); // Clear previous images
            if (files.length > 6) {
                alert("You can only upload a maximum of 6 images.");
                $('#images').val(''); // Reset the input
                return false;
            }
            for (var i = 0; i < files.length; i++) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    previewDiv.append('<img height="50px" width="50px" class="img-thumbnail" src="' + e.target.result + '"  />');
                };
                reader.readAsDataURL(files[i]); // Convert the file to a data URL
            }
        }

        // Trigger preview on image selection
        $('#images').on('change', function () {
            previewImages(this);
        });

        //Validate form submission
        // $('#createProductForm').on('submit', function (e) {
        //     var files = $('#images')[0].files;
        //     if (files.length <3) {
        //         alert("Please select at least three images.");
        //         e.preventDefault(); // Stop form submission
        //     } else if (files.length > 6) {
        //         alert("You can only upload up to 6 images.");
        //         e.preventDefault();
        //     }
        // });

         // Event listener for the "Add" button for size
    $('#sizeInputBtn').click(function() {
      var newSize = $('#sizeInput').val().trim(); // Get the value and remove extra spaces
      var currentSize = $('#size').val(); // Get the current value of size input

      if (newSize) {
        if (currentSize === '' || currentSize === 'No Size Specified') {
          $('#size').val(newSize); // Set the new size if no size is already present
         
        } else {
          $('#size').val(currentSize + ', ' + newSize); // Append the new size to the existing ones
        }
        $('#sizeBox').append("<div><i class='bi bi-square-fill'></i> " + newSize + "</div>");

        $('#sizeInput').val(''); // Clear the input field after adding
      }
    });

    // Event listener for the "Add" button for color
        $('#colorInputBtn').click(function() {
        var newColor = $('#colorInput').val().trim(); // Get the value and remove extra spaces
        var currentColor = $('#color').val(); // Get the current value of color input

            if (newColor && isValidColor(newColor)) {
                if (currentColor === '' || currentColor === 'No Colors Specified') {
                    // Set the new color if no color is already present
                    $('#color').val(newColor);
                } else {
                    // Append the new color to the existing ones
                    $('#color').val(currentColor + ', ' + newColor);
                }

                // Always append the new color to the colorBox
                $('#colorBox').append("<div style='color: " + newColor + "'><i class='bi bi-square-fill'></i> " + newColor + "</div>");
                
                // Clear the input field after adding the color
                $('#colorInput').val('');
            }
        });

        $('#sizeClearBtn').on('click', function() {
            $('#sizeBox').html('');    // Clear the content inside the #sizeBox element
            $('#size').val('');        // Clear the value of the input with id #size
        });

        $('#colorClearBtn').on('click', function() {
            $('#colorBox').html('');    // Clear the content inside the #sizeBox element
            $('#color').val('');        // Clear the value of the input with id #size
        });

        function isValidColor(color) {
            var div = $('<div></div>'); // Create a temporary div element
            div.css('color', color);    // Try setting the color
            
            // The color property will return the computed color if valid, or an empty string if invalid
            return div.css('color') !== '';
        }
    });
</script>
    
@endpush