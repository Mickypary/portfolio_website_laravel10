<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Footer;

class FooterController extends Controller
{
    public function FooterSetup()
    {
        $footer = Footer::find(1);
        return view('admin.footer.footer_view', compact('footer'));
    }

    public function UpdateFooter(Request $request)
    {
        Footer::findOrFail($request->id)->update([
            'phone_no' => $request->phone_no,
            'short_description' => $request->short_description,
            'country' => $request->country,
            'address' => $request->address,
            'email' => $request->email,
            'motto' => $request->motto,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
            'copyright' => $request->copyright,
        ]);

        $notification = array(
            'message' => 'Footer Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);


    }



} // End Class
