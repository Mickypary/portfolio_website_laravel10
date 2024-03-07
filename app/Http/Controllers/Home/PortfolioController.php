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

        if ($request->file('portfolio_image')) {
            $portfolio_image = $request->file('portfolio_image');
            $filename = hexdec(uniqid()).'.'.$portfolio_image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($portfolio_image);
            $image->resize(1020,520);
            $image->toPng()->save(public_path('upload/portfolio_image/'.$filename));
            $portfolio_image_url = 'upload/portfolio_image/'.$filename;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_category' => $request->portfolio_category,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $portfolio_image_url,
                'created_at' => Carbon::now(),
            ]);

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

        $oldimage = Portfolio::findOrFail($request->id);

        if ($request->file('portfolio_image')) {
            $portfolio_image = $request->file('portfolio_image');
            $filename = hexdec(uniqid()).'.'.$portfolio_image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($portfolio_image);
            $image->resize(1020,520);
            $image->toPng()->save(public_path('upload/portfolio_image/'.$filename));
            @unlink($oldimage->portfolio_image);
            $portfolio_image_url = 'upload/portfolio_image/'.$filename;

            Portfolio::findOrFail($request->id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_category' => $request->portfolio_category,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $portfolio_image_url,
                // 'updated_at' => Carbon::now(),
            ]);

        }else {
            Portfolio::findOrFail($request->id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_category' => $request->portfolio_category,
                'portfolio_description' => $request->portfolio_description,
                // 'updated_at' => Carbon::now(),
            ]);
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



} // End Class
