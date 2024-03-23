<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

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

            if ($request->file('wrap_image')) {
                @unlink($blog->wrap_image);
                $wrap_image = $request->file('wrap_image');
                $filename = hexdec(uniqid()).'.'.$wrap_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image_url = 'upload/blog_images/'.$filename;
                $blog->wrap_image = $wrap_image_url;
            }

            if ($request->file('wrap_image2')) {
                $wrap_image2 = $request->file('wrap_image2');
                $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image2);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image2_url = 'upload/blog_images/'.$filename;
                $blog->wrap_image2 = $wrap_image2_url;
            }

            if ($request->file('blog_thumb')) {
                @unlink($blog->blog_thumb);
                $blog_thumb = $request->file('blog_thumb');
                $filename = hexdec(uniqid()).'.'.$blog_thumb->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($blog_thumb);
                $image->resize(90,90)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $blog_thumb_url = 'upload/blog_images/'.$filename;
                $blog->blog_thumb = $blog_thumb_url;
            }

            if ($request->file('post_thumb')) {
                @unlink($blog->post_thumb);
                $post_thumb = $request->file('post_thumb');
                $filename = hexdec(uniqid()).'.'.$post_thumb->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($post_thumb);
                $image->resize(104,68)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $post_thumb_url = 'upload/blog_images/'.$filename;
                $blog->post_thumb = $post_thumb_url;
            }

                $blog->blog_category_id = $request->blog_category_id;
                $blog->blog_title = $request->blog_title;
                $blog->blog_description = $request->blog_description;
                $blog->blog_tags = $request->blog_tags;            
                $blog->video_url = $request->video_url;            
                $blog->created_by = Auth::user()->name;  
                $blog->user_id = Auth::user()->id;            
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

    public function EditBlog($id)
    {
        $categories = BlogCategory::orderBy('blog_category','asc')->get();
        $editData = Blog::findOrFail($id);
        return view('admin.blog.blog_edit', compact('editData','categories'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        if ($request->file('blog_image') || empty($request->file('blog_image'))) {

            if ($request->file('blog_image')) {
                @unlink($blog->blog_image);
                $blog_image = $request->file('blog_image');
                $filename = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($blog_image);
                $image->resize(430,327)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $blog_image_url = 'upload/blog_images/'.$filename;
                $blog->blog_image = $blog_image_url;
            }
            

            if ($request->file('detail_image')) {
                @unlink($blog->detail_image);
                $detail_image = $request->file('detail_image');
                $filename = hexdec(uniqid()).'.'.$blog_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($detail_image);
                $image->resize(850,430)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $detail_image_url = 'upload/blog_images/'.$filename;
                $blog->detail_image = $detail_image_url;
            }

            if ($request->file('wrap_image')) {
                @unlink($blog->wrap_image);
                $wrap_image = $request->file('wrap_image');
                $filename = hexdec(uniqid()).'.'.$wrap_image->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image_url = 'upload/blog_images/'.$filename;
                $blog->wrap_image = $wrap_image_url;
            }

            if ($request->file('wrap_image2')) {
                @unlink($blog->wrap_image2);
                $wrap_image2 = $request->file('wrap_image2');
                $filename = hexdec(uniqid()).'.'.$wrap_image2->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($wrap_image2);
                $image->resize(414,348)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $wrap_image2_url = 'upload/blog_images/'.$filename;
                $blog->wrap_image2 = $wrap_image2_url;
            }

            if ($request->file('blog_thumb')) {
                @unlink($blog->blog_thumb);
                $blog_thumb = $request->file('blog_thumb');
                $filename = hexdec(uniqid()).'.'.$blog_thumb->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($blog_thumb);
                $image->resize(90,90)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $blog_thumb_url = 'upload/blog_images/'.$filename;
                $blog->blog_thumb = $blog_thumb_url;
            }

            if ($request->file('post_thumb')) {
                @unlink($blog->post_thumb);
                $post_thumb = $request->file('post_thumb');
                $filename = hexdec(uniqid()).'.'.$post_thumb->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $image = $manager->read($post_thumb);
                $image->resize(104,68)->toPng()->save(base_path('public/upload/blog_images/'.$filename));
                $post_thumb_url = 'upload/blog_images/'.$filename;
                $blog->post_thumb = $post_thumb_url;
            }

                $blog->blog_category_id = $request->blog_category_id;
                $blog->blog_title = $request->blog_title;
                $blog->blog_description = $request->blog_description;
                $blog->blog_tags = $request->blog_tags;  
                $blog->video_url = $request->video_url; 
                $blog->created_by = Auth::user()->name;          
                $blog->save();          

        }else {
                $blog->blog_category_id = $request->blog_category_id;
                $blog->blog_title = $request->blog_title;
                $blog->blog_description = $request->blog_description;
                $blog->blog_tags = $request->blog_tags; 
                $blog->video_url = $request->video_url; 
                $blog->created_by = Auth::user()->name;           
                $blog->user_id = Auth::user()->id;           
                $blog->save(); 
        }

        $notification = array(
            'message' => 'Blog Data Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog')->with($notification);
    }

    public function DeleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        @unlink($blog->blog_image);
        $blog->delete();
        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success',
        );
            return redirect()->route('all.blog')->with($notification);
    }

    public function BlogDetails($id)
    {
        $recentblogs = Blog::latest()->limit(5)->get();
        $categories = Blog::groupBy('blog_category_id')->selectRaw('blog_category_id, count(blog_category_id) as cat_count')->get();
        // $categories = Blog::select(DB::raw('count("blog_category_id") as cat_count, blog_category_id'))
        //       ->groupBy('blog_category_id')
        //       ->get();
        $blogs = Blog::findOrFail($id);
        $blog_tags = Blog::all();
        return view('frontend.blog.blog_details', compact('blogs','recentblogs','categories','blog_tags'));
    }

    public function BlogCategory($blog_category_id)
    {
        $recentblogs = Blog::latest()->limit(5)->get();
        $blog_tags = Blog::groupBy('blog_tags')->select('blog_tags')->get();
        $categories = Blog::groupBy('blog_category_id','created_by','user_id')->selectRaw('blog_category_id,created_by,user_id, count(blog_category_id) as cat_count')->get();
        $blogpost = Blog::where('blog_category_id',$blog_category_id)->orderBy('id','desc')->get();
        // dd($categories);
        return view('frontend.blog.blog_cat_details', compact('blogpost','recentblogs','categories','blog_tags'));
    }

    public function AllBlogNews()
    {
        $recentblogs = Blog::latest()->limit(5)->get();
        $categories = Blog::groupBy('blog_category_id','created_by','user_id')->selectRaw('blog_category_id,created_by,user_id, count(blog_category_id) as cat_count')->get();
        $blogtags = Blog::all();
        $blogpost = Blog::latest()->paginate(3);
        return view('frontend.blog.blog_all', compact('blogpost','recentblogs','categories','blogtags'));
    }

    public function BlogFilterGet(Request $request)
    {
        $html = "";
        $blog = $request->search;
         if ($blog !='') {
            $where[] = ['blog_tags','like','%'.$blog.'%'];
            $orWhere[] = ['blog_title','like','%'.$blog.'%'];
         }

         $data = Blog::where($where)->orWhere($orWhere)->get();

         foreach ($data as $key => $item) {
            $html .= '<a href="'. route('blog.details', $item->id) . '"><img src="'. asset($item->blog_thumb).'"></a>';
            $html .= '<h5 class="title"><a href="'. route('blog.details', $item->id) . '">'.$item->blog_title.'</a></h5>';
            $html .= '<span class="post-date"><i class="fal fa-calendar-alt"></i>'.Carbon::parse($item->created_at)->diffForHumans(). '</span>';
            

         }  

         return response(@$html);
    }




} // End Class
