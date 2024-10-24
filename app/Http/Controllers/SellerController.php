<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function registerSeller(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email|unique:sellers,email',
            'password'=>'required|confirmed|min:6'
        ]);

        $seller = Seller::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$data['password']
        ]);

        if($seller){
            return redirect()->route('sellerLoginPage')->with([
                'alertType'=>'success',
                'alertReason'=>'Registration Successful!',
                'alertMessage'=>'Login to continue'
            ]);;
        }
        // return $request;
    }

    public function loginSeller(Request $request)
    {

        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::guard('seller')->attempt($data)) {

                // Check if the checkbox 'subscribe' is checked or not
                $rememberCheck = $request->has('rememberCheck') ? true : false;

                if ($rememberCheck) {
                    // The checkbox was checked
                    // Set cookies here
                }

           return redirect()->route('seller');;
        } 
        else{
            return back()->withInput()
            ->with([
                'alertType'=>'danger',
                'alertReason'=>'Login Failed!',
                'alertMessage'=>'Please try again'
            ]);
        }
        
    // return $request;
    }

    public function logoutSeller()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('sellerLoginPage');
    }

    public function updateSeller(Request $request){
       
        $data=$request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048', // Adjust size and formats as needed
            'name'=>'required|alpha',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',
            'province'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'country'=>'required'
        ]);

        // return $data;
        $seller = Seller::find(Auth::guard('seller')->id());
        // $seller = Auth::user();
        
        if ($seller) {

            $seller->update([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);

            $seller->address()->updateorCreate(
                [   // The condition to find the existing address
                    'addressable_id' => $seller->id,
                    'addressable_type' => Seller::class,
                ],
                [
                'contact'=>$data['contact'],
                'address'=>$data['address'],
                'province'=>$data['province'],
                'city'=>$data['city'],
                'postal_code'=>$data['postal_code'],
                'country'=>$data['country']
            ]);

            // Check if an image file was uploaded
            if ($request->hasFile('image')) {
                // Get the uploaded image
                $image = $request->file('image');
                
                // Generate a unique name for the image using a timestamp and the original extension
                $uniqueImageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                
                // Store the image in the 'public/images' directory
                $imagePath = $image->storeAs('images', $uniqueImageName, 'public');

                // Optionally, delete the old image if one exists
                if(isset(Auth::guard('seller')->user()->image->url)){
                    $oldpath = ltrim(Auth::guard('seller')->user()->image->url, 'storage/');
                    if (Storage::disk('public')->exists($oldpath)) {
                        Storage::disk('public')->delete($oldpath);
                        
                    }
                }
                

                // Save the new image URL in the database
                $seller->image()->updateOrCreate([], [
                    'url' => 'storage/' . $imagePath
                ]);
            }

            return redirect()->back()->with([
                                'alertType'=>'success',
                                'alertReason'=>'Action Successful!',
                                'alertMessage'=>'Upated your records'
                            ]);
        }
        else{
            return redirect()->back()->with([
                'alertType'=>'danger',
                'alertReason'=>'Action Unsuccessful!',
                'alertMessage'=>'Your action was not completed'
            ]);
        }
        

        // if($seller){
        //     return redirect()->back('sellerLoginPage');
        // }
    }

    public function updateSellerPassword(Request $request)
    {
        
        $data = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
        // return $data;
        // Get the currently authenticated seller
        $seller = Seller::find( Auth::guard('seller')->id());

        // Verify the old password
        if (!Hash::check($data['old_password'], $seller->password)) {
            return redirect()->back()->with([
                'alertType' => 'danger',
                'alertReason' => 'Password Change Failed!',
                'alertMessage' => 'Old password does not match.'
            ]);
        }

        // Update the password
        $seller->update([
            'password' =>$data['password'] // Store new password
        ]);

        // Log the user out
        Auth::guard('seller')->logout();

        return redirect()->route('sellerLoginPage')->with([
            'alertType' => 'success',
            'alertReason' => 'Password Changed Successfully!',
            'alertMessage' => 'Please log in again to continue.'
        ]);
    }

   public function test()
   {
    // Optionally, delete the old image if one exists
    if (Storage::disk('public')->exists('storage/images/50020308-2eb9-4ca1-a066-8751cfc90d5a.png')) {
        // return Auth::guard('seller')->user()->image->url;
        return "Found";
        // Storage::disk('public')->delete(Auth::guard('seller')->user()->image->url);
        
    }
    else
    {
        return Auth::guard('seller')->user()->image->url;
    }
   }
}
