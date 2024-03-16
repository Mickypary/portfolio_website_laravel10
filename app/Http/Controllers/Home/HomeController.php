<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeSlide;
use App\Models\HomePartners;
use App\Models\HomePartnerImage;
use App\Models\ClientFeedback;
use App\Models\HomeClientImage;
use App\Models\HomeService;

use Illuminate\Support\Carbon;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
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





    //  Partner Methods=========================================================================================================

    public function Partner()
    {
        $partner = HomePartners::find(1);
        return view('admin.partner.partner_view',compact('partner'));
    }

    public function UpdatePartner(Request $request)
    {
        HomePartners::findOrFail($request->id)->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
        ]);

        $notification = array(
            'message' => 'Partners Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('view.partner')->with($notification);
    }

    public function PartnerImage()
    {
        $partnerImages = HomePartnerImage::latest()->get();
        return view('admin.partner.partner_image_view',compact('partnerImages'));
    }

    public function AddPartnerImage()
    {
        return view('admin.partner.partner_image_add');
    }

    public function StorePartnerImage(Request $request)
    {
        $image = $request->file('partner_multi_image');
        if ($image) {
            foreach ($image as $key => $multi_image) {
                $filename = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($multi_image);
                $image->resize(297,297)->toPng()->save(base_path('public/upload/partner_images/'.$filename));
                $partner_image_url = 'upload/partner_images/'.$filename;

                // $multiimage = new MultiImage();
                // $multiimage->multi_image = $multi_image_url;
                // $multiimage->save();

                HomePartnerImage::insert([
                    'partner_image' => $partner_image_url,
                    'created_at' => Carbon::now(),
                ]);

            }

                $notification = array(
                    'message' => 'Partner Image Inserted Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('upload.partner.image')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function EditPartnerImage($id)
    {
        $editData = HomePartnerImage::findOrFail($id);
        return view('admin.partner.partner_image_edit',compact('editData'));
    }


    public function UpdatePartnerImage(Request $request)
    {
        $oldimage = HomePartnerImage::findOrFail($request->id);
        $image = $request->file('partner_image');
        if ($image) {
                @unlink($oldimage->partner_image);
                $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($image);
                $image->resize(297,297)->toPng()->save(base_path('public/upload/partner_images/'.$filename));
                $partner_image_url = 'upload/partner_images/'.$filename;

                // $multiimage = new MultiImage();
                // $multiimage->multi_image = $multi_image_url;
                // $multiimage->save();

                HomePartnerImage::findOrFail($request->id)->update([
                    'partner_image' => $partner_image_url,
                ]);

                $notification = array(
                    'message' => 'Partner Image Updated Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('upload.partner.image')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function DeletePartnerImage($id)
    {
        $find = HomePartnerImage::findOrFail($id);
        @unlink($find->partner_image);
        $find->delete();

            $notification = array(
                'message' => 'Partner Image Deleted Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('upload.partner.image')->with($notification);

    }

    public function ClientFeedback()
    {
        $clientfeedback = ClientFeedback::all();
        return view('admin.client_feedback.client_feedback_view', compact('clientfeedback'));
    }

    public function ClientFeedbackAdd()
    {
        return view('admin.client_feedback.client_feedback_add');
    }

    public function ClientFeedbackStore(Request $request)
    {
        ClientFeedback::insert([
            'client_feedback' => $request->client_feedback,
            'client_name' => $request->client_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Client Feedback Inserted Successfully',
            'alert-type' => 'success',
        );   

        return redirect()->route('client.feedback')->with($notification);
    }

    public function ClientFeedbackEdit($id)
    {
        $editData = ClientFeedback::findOrFail($id);
        return view('admin.client_feedback.client_feedback_edit', compact('editData'));
    }

    public function ClientFeedbackUpdate(Request $request)
    {
        ClientFeedback::findOrFail($request->id)->update([
            'client_feedback' => $request->client_feedback,
            'client_name' => $request->client_name,
        ]);

        $notification = array(
            'message' => 'Client Feedback Updated Successfully',
            'alert-type' => 'success',
        );   

        return redirect()->route('client.feedback')->with($notification);
    }

    public function ClientFeedbackDelete($id)
    {
        $find = ClientFeedback::findOrFail($id);
        $find->delete();

            $notification = array(
                'message' => 'Client Feedback Deleted Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('client.feedback')->with($notification);
    }


    public function ClientImage()
    {
        $clientImages = HomeClientImage::latest()->get();
        return view('admin.client_feedback.client_feedback_image_view',compact('clientImages'));
    }

    public function ClientImageAdd()
    {
        return view('admin.client_feedback.client_feedback_image_add');
    }

    public function ClientImageStore(Request $request)
    {
        $image = $request->file('client_multi_image');
        if ($image) {
            foreach ($image as $key => $multi_image) {
                $filename = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($multi_image);
                $image->resize(128,128)->toPng()->save(base_path('public/upload/client_images/'.$filename));
                $client_image_url = 'upload/client_images/'.$filename;

                // $multiimage = new MultiImage();
                // $multiimage->multi_image = $multi_image_url;
                // $multiimage->save();

                HomeClientImage::insert([
                    'client_image' => $client_image_url,
                    'created_at' => Carbon::now(),
                ]);

            }

                $notification = array(
                    'message' => 'Client Image(s) Inserted Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('client.image')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function ClientImageEdit($id)
    {
        $editData = HomeClientImage::findOrFail($id);
        return view('admin.client_feedback.client_feedback_image_edit',compact('editData'));
    }

    public function ClientImageUpdate(Request $request)
    {
        $oldimage = HomeClientImage::findOrFail($request->id);
        $image = $request->file('client_image');
        if ($image) {
            @unlink($oldimage->client_image);
                $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($image);
                $image->resize(128,128)->toPng()->save(base_path('public/upload/client_images/'.$filename));
                $client_image_url = 'upload/client_images/'.$filename;

                // $multiimage = new MultiImage();
                // $multiimage->multi_image = $multi_image_url;
                // $multiimage->save();

                HomeClientImage::findOrFail($request->id)->update([
                    'client_image' => $client_image_url,
                ]);

                $notification = array(
                    'message' => 'Client Image Updated Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('client.image')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function ClientImageDelete($id)
    {
        $find = HomeClientImage::findOrFail($id);
        @unlink($find->client_image);
        $find->delete();

            $notification = array(
                'message' => 'Client Image Deleted Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('client.image')->with($notification);
    }












    // All Services ===================================================================




    public function AllService()
    {
        $service = HomeService::all();
        return view('admin.service.service_view',compact('service'));
    }

    public function AddService()
    {
        return view('admin.service.service_add');
    }

    public function StoreService(Request $request)
    {
        $service = new HomeService();
        
        if ($request->file('home_image')) {
            $home_image = $request->file('home_image');
                $filename = hexdec(uniqid()).'.'.$home_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($home_image);
                $image->resize(323,240)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                $main_image_url = 'upload/service_images/'.$filename;
                $service->main_image = $main_image_url;

                if ($request->file('detail_image')) {
                    $detail_image = $request->file('detail_image');
                    $filename = hexdec(uniqid()).'.'.$detail_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($detail_image);
                    $image->resize(850,430)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $detail_image_url = 'upload/service_images/'.$filename;
                    $service->detail_image = $detail_image_url;
                }

                if ($request->file('wrap_image1')) {
                    $wrap_image1 = $request->file('wrap_image1');
                    $filename = hexdec(uniqid()).'.'.$wrap_image1->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image1);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $wrap_image1_url = 'upload/service_images/'.$filename;
                    $service->wrap_image1 = $wrap_image1_url;
                }

                if ($request->file('wrap_image2')) {
                    $wrap_image2 = $request->file('wrap_image2');
                    $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image2);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $wrap_image2_url = 'upload/service_images/'.$filename;
                    $service->wrap_image2 = $wrap_image2_url;
                }

                if ($request->file('icon')) {
                    $icon = $request->file('icon');
                    $filename = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($icon);
                    $image->resize(82,82)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $icon_url = 'upload/service_images/'.$filename;
                    $service->icon = $icon_url;
                }

                $service->title = $request->title;
                $service->short_description = $request->short_description;
                $service->long_description = $request->long_description;
                $service->other_text = $request->other_text;
                $service->save();

                $notification = array(
                    'message' => 'Service Data Inserted Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('all.service')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function EditService($id)
    {
        $editData = HomeService::findOrFail($id);
        return view('admin.service.service_edit',compact('editData'));
    }

    public function UpdateService(Request $request)
    {
        $service = HomeService::findOrFail($request->id);
        
        if ($request->file('home_image') || empty($request->file('home_image'))) {
                if ($request->file('home_image')) {
                    $home_image = $request->file('home_image');
                    @unlink($service->main_image);
                    $filename = hexdec(uniqid()).'.'.$home_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($home_image);
                    $image->resize(323,240)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $main_image_url = 'upload/service_images/'.$filename;
                    $service->main_image = $main_image_url;
                }
            

                if ($request->file('detail_image')) {
                    $detail_image = $request->file('detail_image');
                    @unlink($service->detail_image);
                    $filename = hexdec(uniqid()).'.'.$detail_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($detail_image);
                    $image->resize(850,430)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $detail_image_url = 'upload/service_images/'.$filename;
                    $service->detail_image = $detail_image_url;
                }

                if ($request->file('wrap_image1')) {
                    $wrap_image1 = $request->file('wrap_image1');
                    @unlink($service->wrap_image1);
                    $filename = hexdec(uniqid()).'.'.$wrap_image1->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image1);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $wrap_image1_url = 'upload/service_images/'.$filename;
                    $service->wrap_image1 = $wrap_image1_url;
                }

                if ($request->file('wrap_image2')) {
                    $wrap_image2 = $request->file('wrap_image2');
                    @unlink($service->wrap_image2);
                    $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image2);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $wrap_image2_url = 'upload/service_images/'.$filename;
                    $service->wrap_image2 = $wrap_image2_url;
                }

                if ($request->file('icon')) {
                    $icon = $request->file('icon');
                    @unlink($service->icon);
                    $filename = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($icon);
                    $image->resize(82,82)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $icon_url = 'upload/service_images/'.$filename;
                    $service->icon = $icon_url;
                }

                $service->title = $request->title;
                $service->short_description = $request->short_description;
                $service->long_description = $request->long_description;
                $service->other_text = $request->other_text;
                $service->save();

        }else {
                $service->title = $request->title;
                $service->short_description = $request->short_description;
                $service->long_description = $request->long_description;
                $service->other_text = $request->other_text;
                $service->save();
        }

                $notification = array(
                    'message' => 'Service Data Updated Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('all.service')->with($notification);
    }





// ============================================================================================




    public function ServiceDetails($id)
    {
        $editData = HomeService::findOrFail($id);
        return view('frontend.service.service_details',compact('editData'));
    }

    public function ServiceDetailsMenu()
    {
        $allData = HomeService::all();
        return view('frontend.service.service_details_all',compact('allData'));
    }



} // End Class
