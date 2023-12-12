<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function VendorDashboard(){

        return view('vendor.index');

    }//end method

    public function VendorLogin()
    {
        return view('vendor.vendor_login');
    }//end method


    public function VendorDestroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Vendor Logged out Successfully',
            'alert-type' => 'success'
        );
        
        
        return redirect('/vendor/login')->with($notification);
    }//end method


    public function VendorProfile()
    {
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile_view',compact('vendorData'));
    }//end method


    public function VendorProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->vendor_join = $request->vendor_join;
        $data->vendor_short_info = $request->vendor_short_info;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/vendor_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images'), $filename);
            $data['photo'] = $filename;

        }

        $data->save();

        $notification = array(
            'message' => 'Vendor Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//end method


    public function VendorChangePassword(){
        return view('vendor.vendor_change_password');

    }//end method

    public function UpdatePassword(Request $request)
    {
        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //old password match
        if(!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Does Not Match!!!");
        }

        //update new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "Password Updated Successfully");

    }//end method
}
