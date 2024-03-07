<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;



class AdminController extends Controller
{
    public function Logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successful',
            'alert-type' => 'success',
        );

        return redirect('/')->with($notification);
    }

    public function Profile()
    {
        $id = Auth::user()->id;
        $data['adminData'] = User::findOrFail($id);
        return view('admin.admin_profile_view', $data);
    }

    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->about = $request->about;
        $user->job = $request->job;
        $user->company = $request->company;
        $user->twitter_profile = $request->twitter_profile;
        $user->facebook_profile = $request->facebook_profile;
        $user->instagram_profile = $request->instagram_profile;
        $user->linkedin_profile = $request->linkedin_profile;
        
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/'),$filename);
            @unlink(public_path('upload/admin_images/').$user->profile_image);

            $user->profile_image = $filename;
        }


        $user->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.profile')->with($notification);


    }

    public function UpdatePassword(Request $request)
    {
        $validate = $request->validate([
            'password' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ],[
            'password.required' => 'Password field is required',
            'confirmpassword.same' => 'Confirm Password field must match New Password field',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->password,$hashedPassword)) {
            $user = User::findOrFail(Auth::id());
            $user->password = bcrypt($request->newpassword);
            $user->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        }else {
            session()->flash('message','Password mismatch. Try again!');
            return redirect()->back();
        }     

        
    }




} // End Class
