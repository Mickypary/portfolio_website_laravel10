<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeSlide;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeSlideController extends Controller
{
    public function HomeSlider()
    {
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_view', compact('homeslide'));
    }

    public function UpdateSlider(Request $request)
    {    
        $data = HomeSlide::findOrFail($request->id);
        if ($request->file('home_slide')) {
            $file = $request->file('home_slide');
            // $filename = date('YmdHi').$file->getClientOriginalName();
            $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(636,852);
            $image->toPng()->save(base_path('public/upload/home_slides/'.$filename));
            // $file->move(public_path('upload/home_slides'),$filename);
            @unlink(public_path($data->home_slide));
            $home_slide_url = 'upload/home_slides/'.$filename;

            $homeslide = HomeSlide::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $home_slide_url,
            ]);
        }else {
            $homeslide = HomeSlide::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);
        }

        $notification = array(
            'message' => 'Home Slider Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('home.slide')->with($notification);
    }



} // End Class
