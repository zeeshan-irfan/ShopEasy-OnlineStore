<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Seller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller = Seller::find(Auth::guard('seller')->id());
        $products = $seller->product()->where('status',true)->get();
        // dd($products);
        return view('seller.products',['products'=>$products]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category =Category::get();
        $brand =Brand::get();
        return view('seller.productcreate',['category'=>$category,'brand'=>$brand]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'productid'=>'nullable',
            'title'=>'required',
            'description'=>'required',
            'size'=>'nullable',
            'color'=>'nullable',
            'price'=>'required',
            'quantity'=>'required',
            'images' => 'required|array|min:3', // Ensure at least 3 files are uploaded
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each file in the array
            'category'=>'required|exists:categories,id',
            'brand'=>'required|exists:brands,id',
        ]);
        // return $data;

         // Initialize an array to store image paths
            $ImagesPathArray = [];
            
            // Check if the request contains images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Generate a unique name for the image using a UUID
                    $uniqueImageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                    
                    // Store the image in the 'public/images' directory
                    $imagePath = $image->storeAs('images/products', $uniqueImageName, 'public');
                    
                    // Add the image path to the array
                    $ImagesPathArray[] = 'storage/'.$imagePath;
                }
            }

            // return $ImagesPathArray;

            $seller = Seller::find(Auth::guard('seller')->id());

            $check = $seller->product()->create([
                'productid'=>$data['productid'],
                'title'=>$data['title'],
                'description'=>$data['description'],
                'size'=>$data['size'],
                'color'=>$data['color'],
                'price'=>$data['price'],
                'quantity'=>$data['quantity'],
                'images' =>$ImagesPathArray, 
                'category_id'=>$data['category'],
                'brand_id'=>$data['brand']
            ]);

            if($check)
            {
                return redirect()->back()->with([
                    'alertType'=>'success',
                    'alertReason'=>'Saved As Draft!',
                    'alertMessage'=>'Product is saved as Draft'
                ]);
            }
            else
            {
                return redirect()->back()->with([
                    'alertType'=>'danger',
                    'alertReason'=>'Action Unsuccessful!',
                    'alertMessage'=>'Product was not Saved'
                ]);
            }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seller = Seller::with(['address'])->find(Auth::guard('seller')->id());
        $product=$seller->product()->with(['seller.address'])->find($id);
        if ($product) {
            return view('seller.productshow',['product'=>$product]);
        } else {
            return redirect()->back()->with([
                'alertType'=>'danger',
                'alertReason'=>'Failed to process!',
                'alertMessage'=>'Please refresh page and try again'
            ]);
        }
        

        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category =Category::get();
        $brand =Brand::get();
        $seller = Seller::with(['address'])->find(Auth::guard('seller')->id());
        $product=$seller->product()->with(['seller.address'])->find($id);
        if ($product) {
            // return $product;
            // dd($product);
            return view('seller.productedit',['product'=>$product,'category'=>$category,'brand'=>$brand]);
        } else {
            return redirect()->back()->with([
                'alertType'=>'danger',
                'alertReason'=>'Failed to process!',
                'alertMessage'=>'Please refresh page and try again'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $data = $request->validate([
            'productid' => 'nullable|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'images' => 'nullable|array|min:3', // At least 3 files if present
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
            'oldImagePath' => 'nullable|string', // String of old image paths
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id',
        ]);
        // return $data;

         // Initialize an array to store image paths
            $ImagesPathArray = [];
            
            // Check if the request contains images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Generate a unique name for the image using a UUID
                    $uniqueImageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                    
                    // Store the image in the 'public/images' directory
                    $imagePath = $image->storeAs('images/products', $uniqueImageName, 'public');
                    
                    // Add the image path to the array
                    $ImagesPathArray[] = 'storage/'.$imagePath;
                }

                 // Optionally, delete the old image if one exists
                 if(!empty($data['oldImagePath']))
                 {   foreach (explode(',',$data['oldImagePath']) as $image) {
                        if($image){
                            $filePath = public_path($image);
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                        }
                    }
                }
            }
            else
            {
                $ImagesPathArray = explode(',',$data['oldImagePath']);
            }

            // return $ImagesPathArray;

            $seller = Seller::find(Auth::guard('seller')->id());

            $check = $seller->product()->where('id',$id)->update([
                'productid'=>$data['productid'],
                'title'=>$data['title'],
                'description'=>$data['description'],
                'size'=>$data['size'],
                'color'=>$data['color'],
                'price'=>$data['price'],
                'quantity'=>$data['quantity'],
                'images' =>$ImagesPathArray, 
                'category_id'=>$data['category'],
                'brand_id'=>$data['brand']
            ]);

            if($check)
            {
                return redirect()->back()->with([
                    'alertType'=>'success',
                    'alertReason'=>'Updated Product',
                    'alertMessage'=>'Product is successfully Updated'
                ]);
            }
            else
            {
                return redirect()->back()->with([
                    'alertType'=>'danger',
                    'alertReason'=>'Action Unsuccessful!',
                    'alertMessage'=>'Product was not Updated'
                ]);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seller = Seller::find(Auth::guard('seller')->id());
        $images=$seller->product()->where('id',$id)->get('images');
        $images = $images[0]['images'];
        $product=$seller->product()->where('id',$id)->delete();
        
        if($product)
        {
                // Optionally, delete the old image if one exists
                foreach ($images as $image) {
                    if($image){
                        $filePath = public_path($image);
                        if (file_exists($filePath)) {
                            unlink($filePath);
                        }
                    }
                }
                
            
            return redirect()->back()->with([
                'alertType'=>'success',
                'alertReason'=>'Sucessfully Deleted!',
                'alertMessage'=>'You deleted the Product'
            ]);
        }
        else
        {
            return redirect()->back()->with([
                'alertType'=>'danger',
                'alertReason'=>'Failed to Delete!',
                'alertMessage'=>'Please refresh page and try again'
            ]);
        }
    }

    public function showDrafts()
    {
        $seller = Seller::find(Auth::guard('seller')->id());
        $products=$seller->product()->where('status',false)->get();
        // return $products;
        return view('seller.draft',['products'=>$products]);
    }

    public function publishProduct($id)
    {
        $seller = Seller::find(Auth::guard('seller')->id());
        $product=$seller->product()->where('id',$id)->update([
            'status'=>true
        ]);

        if($product)
            {
                return redirect()->back()->with([
                    'alertType'=>'success',
                    'alertReason'=>'Sucessfully Listed!',
                    'alertMessage'=>'This product is now available for purchase'
                ]);
            }
            else
            {
                return redirect()->back()->with([
                    'alertType'=>'danger',
                    'alertReason'=>'Failed to process!',
                    'alertMessage'=>'Please refresh page and try again'
                ]);
            }
        
        
    }
}
