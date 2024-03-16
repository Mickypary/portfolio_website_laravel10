<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use Illuminate\Support\Carbon;

use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.blog_all', compact('blogs'));
    }

    public function AddBlog()
    {
        $categories = BlogCategory::orderBy('blog_category','asc')->get();
        return view('admin.blog.blog_add', compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        $blog = new Blog();
        if ($request->file('blog_image')) {
            $blog_image = $request->file('blog_image');
            $filename = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($blog_image);
            $image->resize(430,327)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
            $blog_image_url = 'upload/blog_images/'.$filename;
            $blog->blog_image = $blog_image_url;

            if ($request->file('detail_image')) {
                $detail_image = $request->file('detail_image');
                $filename = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($detail_image);
                $image->resize(850,430)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $detail_image_url = 'upload/blog_images/'.$filename;
                $blog->detail_image = $detail_image_url;
            }

            if ($request->file('wrap_image1')) {
                $wrap_image1 = $request->file('wrap_image1');
                $filename = hexdec(uniqid()).'.'.$wrap_image1->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image1);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image1_url = 'upload/blog_images/'.$filename;
                $portfolio->wrap_image1 = $wrap_image1_url;
            }

            if ($request->file('wrap_image2')) {
                $wrap_image2 = $request->file('wrap_image2');
                $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image2);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image2_url = 'upload/blog_images/'.$filename;
                $portfolio->wrap_image2 = $wrap_image2_url;
            }

                $blog->blog_category_id = $request->blog_category_id;
                $blog->blog_title = $request->blog_title;
                $blog->blog_description = $request->blog_description;
                $blog->blog_tags = $request->blog_tags;            
                $blog->save();          

        }else {
            $notification = array(
                'message' => 'Please choose an image',
                'alert-type' => 'error',
            );

            return redirect()->back()->with($notification);
        }

        $notification = array(
            'message' => 'Blog Data Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog')->with($notification);
    }




} // End Class
