<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Hash;

class VendorController extends Controller
{
    public function index(){
        $vendors = User::where('user_type',1)->get();
        return view('vendor.index',compact('vendors'));
    }
    public function add_vendor(){
        return view('vendor.add');
    }
     public function create_vendor(Request $request)
    {
       

        
        $vendor                 = new User;
        $vendor->name           = $request->name;
        $vendor->email          = $request->email;
        $vendor->title          = $request->title;
        $vendor->search_terms   = $request->search_terms;
        $vendor->street         = $request->street;
        $vendor->house_no       = $request->house_no;
        $vendor->postal_code    = $request->postal_code;
        $vendor->city           = $request->city;
        $vendor->country        = $request->country;
        $vendor->bank_name      = $request->bank_name;
        $vendor->account_number = $request->account_number;
        $vendor->user_type      = 1;
        $vendor->password       = Hash::make($request->password);

        $success                = $vendor->save();

        if($success){
          return redirect()->route('vendor')->with('success','Vendor Create SucessFully');  
        }else{
            return redirect()->back()->with('alert','Something Went Wrong');  
        }
    }

    public function updateColumnOrder(Request $request)
    {
    // Get the new column order from the request
    $columnOrder = $request->input('columnOrder');

    // Update the column order in your database or any other logic
    // ...

    // Return a response if needed
    return response()->json(['message' => 'Column order updated successfully']);
    }
}
