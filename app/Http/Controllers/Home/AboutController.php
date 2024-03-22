<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Illuminate\Support\Carbon;

use App\Models\About;
use App\Models\MultiImage;
use App\Models\AboutEducation;
use App\Models\AboutAward;
use App\Models\HomeService;
use App\Models\ClientFeedback;
use App\Models\Blog;

class AboutController extends Controller
{
    public function AboutPage()
    {
        $aboutpage = About::find(1);
        return view('admin.about.about_page_view', compact('aboutpage'));
    }

    public function UpdateAbout(Request $request)
    {
        $data = About::findOrFail($request->id);
        if ($request->file('about_image') || empty($request->file('about_image'))) {
            if ($request->file('about_image')) {
                $file = $request->file('about_image');
                // $filename = date('YmdHi').$file->getClientOriginalName();
                $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($file);
                $image->resize(523,605);
                $image->toPng()->save(base_path('public/upload/about_image/'.$filename));
                // $file->move(public_path('upload/about_image'),$filename);
                @unlink(public_path($data->about_image));
                $about_image_url = 'upload/about_image/'.$filename;
                $data->about_image = $about_image_url;
                $data->save();
            }
            

            if ($request->file('resume')) {
                $file = $request->file('resume');
                // $filename = date('YmdHi').$file->getClientOriginalName();
                $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('upload/download'),$filename);
                @unlink(public_path($data->resume));
                $resume_url = $filename;
                $data->resume = $resume_url;
                $data->save();
            }

                $aboutpage = About::findOrFail($request->id)->update([
                    'title' => $request->title,
                    'short_title' => $request->short_title,
                    'short_description' => $request->short_description,
                    'long_description' => $request->long_description,
                ]);
        }else {
            $aboutpage = About::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);
        }

        $notification = array(
            'message' => 'About Page Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('about.page')->with($notification);
    }

    public function HomeAbout()
    {
        $about = About::findOrFail(1);
        $multi_image = MultiImage::all();
        $education = AboutEducation::all();
        $award = AboutAward::all();
        $service = HomeService::all();
        $feedback = ClientFeedback::all();
        $blog = Blog::latest()->limit(3)->get();
        return view('frontend.about_single_page', compact('about','multi_image','education','award','service','feedback','blog'));
    }







// ========================================================================================================
                                    // About Multi Image Methods








    public function AddMultiImage()
    {
        return view('admin.about.multi_image.multi_image_add');
    }

    public function StoreMultiImage(Request $request)
    {
        $image = $request->file('multi_image');
        if ($image) {
            foreach ($image as $multi_image) {
                $filename = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($multi_image);
                $image->resize(220,220);
                $image->toPng()->save(base_path('public/upload/multi_image/'.$filename));
                // $file->move(public_path('upload/about_image'),$filename);
                $multi_image_url = 'upload/multi_image/'.$filename;

                // $multiimage = new MultiImage();
                // $multiimage->multi_image = $multi_image_url;
                // $multiimage->save();

                MultiImage::insert([
                    'multi_image' => $multi_image_url,
                    'created_at' => Carbon::now(),
                ]);
            }

            $notification = array(
                'message' => 'Multi Image Inserted Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('view.multi.image')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }   
    }

    public function ViewMultiImage()
    {
        $allMultiImage = MultiImage::all();
        return view('admin.about.multi_image.multi_image_view', compact('allMultiImage'));
    }

    public function EditMultiImage($id)
    {
        $editMultiImage = MultiImage::findOrFail($id);
        return view('admin.about.multi_image.multi_image_edit', compact('editMultiImage'));
    }

    public function UpdateMultiImage(Request $request, $id)
    {
        $oldimage = MultiImage::findOrFail($id);
        $image = $request->file('multi_image');
        if ($image) {
            $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
                $image = $manager->read($image);
                $image->resize(220,220);
                $image->toPng()->save(base_path('public/upload/multi_image/'.$filename));
                // $file->move(public_path('upload/about_image'),$filename);
                $multi_image_url = 'upload/multi_image/'.$filename;

                @unlink(public_path().'/'.$oldimage->multi_image);

                MultiImage::findOrFail($id)->update([
                    'multi_image' => $multi_image_url,
                    // 'updated_at' => Carbon::now(),
                ]);

                $notification = array(
                    'message' => 'Multi Image Updated Successfully',
                    'alert-type' => 'success',
                );
        }else {
            $notification = array(
                'message' => 'Update Failed. No Image selected',
                'alert-type' => 'error',
            );
        }

            

            return redirect()->route('view.multi.image')->with($notification);
    }

    public function DeleteMultiImage($id)
    {
        $find = MultiImage::findOrFail($id);
        if ($find) {
            @unlink($find->multi_image);
            $find->delete();
            $notification = array(
                'message' => 'Image Deleted Successfully',
                'alert-type' => 'success',
            );
        }else {
            $notification = array(
                'message' => 'Image not found.',
                'alert-type' => 'error',
            );
        }      

            return redirect()->back()->with($notification);
    }







// ========================================================================================================
                                    // About Education Method




    public function AboutEducation(Request $request,)
    {
        $aboutedu = AboutEducation::all();
        return view('admin.about.education.about_edu_view', compact('aboutedu'));
    }

    public function AddAboutEducation()
    {
        return view('admin.about.education.about_edu_add');
    }

    public function StoreAboutEducation(Request $request)
    {
        AboutEducation::insert([
            'title' => $request->title,
            'date' => $request->date,
            'short_description' => $request->short_description,
        ]);

        $notification = array(
            'message' => 'Data Inserted Successfully',
            'alert-type' => 'success',
        );   

        return redirect()->route('education.view')->with($notification);
    }

    public function EditAboutEducation($id)
    {
        $editData = AboutEducation::findOrFail($id);
        return view('admin.about.education.about_edu_edit', compact('editData'));
    }

    public function UpdateAboutEducation(Request $request)
    {
        AboutEducation::findOrFail($request->id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'short_description' => $request->short_description,
        ]);

            $notification = array(
                'message' => 'Education Bio Updated Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('education.view')->with($notification);
    }

    public function DeleteAboutEducation($id)
    {
        AboutEducation::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Education Bio Deleted Successfully',
            'alert-type' => 'success',
        );
            return redirect()->route('education.view')->with($notification);
    }









    // ========================================================================================================
                                    // About Award Method

    public function AboutAward()
    {
        $aboutaward = AboutAward::all();
        return view('admin.about.award.about_award_view', compact('aboutaward'));
    }

    public function AddAward()
    {
        return view('admin.about.award.about_award_add');
    }

    public function StoreAward(Request $request)
    {
        if ($request->file('award_image')) {
            $award_image = $request->file('award_image');
            $filename = hexdec(uniqid()).'.'.$award_image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($award_image);
            $image->resize(130,130);
            $image->toPng()->save(base_path('public/upload/award_image/'.$filename));
            // $file->move(public_path('upload/award_image'),$filename);
            $award_image_url = 'upload/award_image/'.$filename;

            AboutAward::insert([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'award_image' => $award_image_url,
            ]);

            $notification = array(
                'message' => 'Award Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('award.view')->with($notification);
        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
        
    }

    public function EditAward($id)
    {
        $editData = AboutAward::findOrFail($id);
        return view('admin.about.award.about_award_edit', compact('editData'));
    }

    public function UpdateAward(Request $request)
    {
        $oldimage = AboutAward::findOrFail($request->id);
        if ($request->file('award_image')) {
            @unlink($oldimage->award_image);
            $award_image = $request->file('award_image');
            $filename = hexdec(uniqid()).'.'.$award_image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($award_image);
            $image->resize(130,130);
            $image->toPng()->save(base_path('public/upload/award_image/'.$filename));
            // $file->move(public_path('upload/award_image'),$filename);
            $award_image_url = 'upload/award_image/'.$filename;

            AboutAward::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'award_image' => $award_image_url,
            ]);
        }else {
            AboutAward::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
            ]);
        }

        $notification = array(
                'message' => 'Award Updated Successfully',
                'alert-type' => 'success',
            );
            return redirect()->route('award.view')->with($notification);
    }

    public function DeleteAward($id)
    {
        $oldimage = AboutAward::findOrFail($id);
        @unlink($oldimage->award_image);
        $oldimage->delete();
        $notification = array(
            'message' => 'Award Deleted Successfully',
            'alert-type' => 'success',
        );
            return redirect()->route('award.view')->with($notification);
    }



} // End Class
