<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard (){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('index',compact('userData'));
    }//end method

    public function UserProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['photo'] = $filename;

        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//end method

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }//end method


    public function UserUpdatePassword(Request $request)
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
