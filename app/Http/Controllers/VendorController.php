<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Hash;

class VendorController extends Controller
{
     public function create_vendor(Request $request)
    {
        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
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
    }
}
