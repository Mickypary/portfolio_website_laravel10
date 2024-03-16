<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Illuminate\Support\Carbon;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function ViewPortfolio()
    {
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.view_portfolio',compact('portfolio'));
    }

    public function AddPortfolio()
    {
        return view('admin.portfolio.add_portfolio');
    }

    public function StorePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_category' => 'required',
        ],[
            'portfolio_name.required' => 'The portfolio name field is required',
            'portfolio_title.required' => 'The portfolio title field is required',
        ]);

        $portfolio = new Portfolio();
        
        if ($request->file('portfolio_image')) {
            $home_image = $request->file('portfolio_image');
                $filename = hexdec(uniqid()).'.'.$home_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($home_image);
                $image->resize(1020,520)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                $main_image_url = 'upload/portfolio_image/'.$filename;
                $portfolio->portfolio_image = $main_image_url;

                if ($request->file('detail_image')) {
                    $detail_image = $request->file('detail_image');
                    $filename = hexdec(uniqid()).'.'.$detail_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($detail_image);
                    $image->resize(850,430)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $detail_image_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->detail_image = $detail_image_url;
                }

                if ($request->file('wrap_image1')) {
                    $wrap_image1 = $request->file('wrap_image1');
                    $filename = hexdec(uniqid()).'.'.$wrap_image1->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image1);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/service_images/'.$filename));
                    $wrap_image1_url = 'upload/service_images/'.$filename;
                    $portfolio->wrap_image1 = $wrap_image1_url;
                }

                if ($request->file('wrap_image2')) {
                    $wrap_image2 = $request->file('wrap_image2');
                    $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image2);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $wrap_image2_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->wrap_image2 = $wrap_image2_url;
                }

                if ($request->file('wr_image')) {
                    $wr_image = $request->file('wr_image');
                    $filename = hexdec(uniqid()).'.'.$wr_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wr_image);
                    $image->resize(648,616)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $wr_image_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->wr_image = $wr_image_url;
                }

                $portfolio->portfolio_name = $request->portfolio_name;
                $portfolio->portfolio_title = $request->portfolio_title;
                $portfolio->portfolio_category = $request->portfolio_category;
                $portfolio->portfolio_description = $request->portfolio_description;
                $portfolio->other_text = $request->other_text;
                $portfolio->client_name = $request->client_name;
                $portfolio->client_phone = $request->client_phone;
                $portfolio->client_mail = $request->client_mail;
                $portfolio->client_address = $request->client_address;
                $portfolio->project_name = $request->project_name;
                $portfolio->project_link = $request->project_link;
                $portfolio->project_location = $request->project_location;
                $portfolio->project_date = date('Y m d', strtotime($request->project_date));
                $portfolio->facebook_handle = $request->facebook_handle;
                $portfolio->twitter_handle = $request->twitter_handle;
                $portfolio->instagram_handle = $request->instagram_handle;
                $portfolio->linkedin_handle = $request->linkedin_handle;
                $portfolio->youtube_handle = $request->youtube_handle;
                $portfolio->save();


                $notification = array(
                    'message' => 'Portfolio Inserted Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('view.portfolio')->with($notification);

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function EditPortfolio($id)
    {
        $editData = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio',compact('editData'));
    }

    public function UpdatePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_category' => 'required',
        ],[
            'portfolio_name.required' => 'The portfolio name field is required',
            'portfolio_title.required' => 'The portfolio title field is required',
        ]);

        $portfolio = Portfolio::findOrFail($request->id);
        
        if ($request->file('portfolio_image') || empty($request->file('portfolio_image'))) {
                if ($request->file('portfolio_image')) {
                    $home_image = $request->file('portfolio_image');
                    @unlink($portfolio->portfolio_image);
                    $filename = hexdec(uniqid()).'.'.$home_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($home_image);
                    $image->resize(1020,520)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $main_image_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->portfolio_image = $main_image_url;
                }
            

                if ($request->file('detail_image')) {
                    $detail_image = $request->file('detail_image');
                    @unlink($portfolio->detail_image);
                    $filename = hexdec(uniqid()).'.'.$detail_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($detail_image);
                    $image->resize(850,430)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $detail_image_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->detail_image = $detail_image_url;
                }

                if ($request->file('wrap_image1')) {
                    $wrap_image1 = $request->file('wrap_image1');
                    @unlink($portfolio->wrap_image1);
                    $filename = hexdec(uniqid()).'.'.$wrap_image1->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image1);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $wrap_image1_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->wrap_image1 = $wrap_image1_url;
                }

                if ($request->file('wrap_image2')) {
                    $wrap_image2 = $request->file('wrap_image2');
                    @unlink($portfolio->wrap_image2);
                    $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wrap_image2);
                    $image->resize(414,348)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $wrap_image2_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->wrap_image2 = $wrap_image2_url;
                }

                if ($request->file('wr_image')) {
                    $wr_image = $request->file('wr_image');
                    @unlink($portfolio->wr_image);
                    $filename = hexdec(uniqid()).'.'.$wr_image->getClientOriginalExtension();
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($wr_image);
                    $image->resize(648,616)->toPng()->save(base_path('public/upload/portfolio_image/'.$filename));
                    $wr_image_url = 'upload/portfolio_image/'.$filename;
                    $portfolio->wr_image = $wr_image_url;
                }

                $portfolio->portfolio_name = $request->portfolio_name;
                $portfolio->portfolio_title = $request->portfolio_title;
                $portfolio->portfolio_category = $request->portfolio_category;
                $portfolio->portfolio_description = $request->portfolio_description;
                $portfolio->other_text = $request->other_text;
                $portfolio->client_name = $request->client_name;
                $portfolio->client_phone = $request->client_phone;
                $portfolio->client_mail = $request->client_mail;
                $portfolio->client_address = $request->client_address;
                $portfolio->project_name = $request->project_name;
                $portfolio->project_link = $request->project_link;
                $portfolio->project_location = $request->project_location;
                $portfolio->project_date = $request->project_date;
                $portfolio->facebook_handle = $request->facebook_handle;
                $portfolio->twitter_handle = $request->twitter_handle;
                $portfolio->instagram_handle = $request->instagram_handle;
                $portfolio->linkedin_handle = $request->linkedin_handle;
                $portfolio->youtube_handle = $request->youtube_handle;
                $portfolio->save();

        }else {
                $portfolio->portfolio_name = $request->portfolio_name;
                $portfolio->portfolio_title = $request->portfolio_title;
                $portfolio->portfolio_category = $request->portfolio_category;
                $portfolio->portfolio_description = $request->portfolio_description;
                $portfolio->other_text = $request->other_text;
                $portfolio->client_name = $request->client_name;
                $portfolio->client_phone = $request->client_phone;
                $portfolio->client_mail = $request->client_mail;
                $portfolio->client_address = $request->client_address;
                $portfolio->project_name = $request->project_name;
                $portfolio->project_link = $request->project_link;
                $portfolio->project_location = $request->project_location;
                $portfolio->project_date = $request->project_date;
                $portfolio->facebook_handle = $request->facebook_handle;
                $portfolio->twitter_handle = $request->twitter_handle;
                $portfolio->instagram_handle = $request->instagram_handle;
                $portfolio->linkedin_handle = $request->linkedin_handle;
                $portfolio->youtube_handle = $request->youtube_handle;
                $portfolio->save();
        }

                $notification = array(
                    'message' => 'Portfolio Updated Successfully',
                    'alert-type' => 'success',
                );

                return redirect()->route('view.portfolio')->with($notification);
    }

    public function DeletePortfolio($id)
    {
        $oldimage = Portfolio::findOrFail($id);
        @unlink($oldimage->portfolio_image);
        $oldimage->delete();
        $notification = array(
            'message' => 'Portfolio Deleted Successfully',
            'alert-type' => 'success',
        );
            return redirect()->route('view.portfolio')->with($notification);
    }

    public function PortfolioDetails($id)
    {
        $editData = Portfolio::findOrFail($id);
        return view('frontend.portfolio.portfolio_details',compact('editData'));
    }

    public function AllPortfolio()
    {
        $allData = Portfolio::all();
        return view('frontend.portfolio.portfolio_all',compact('allData'));
    }



} // End Class
