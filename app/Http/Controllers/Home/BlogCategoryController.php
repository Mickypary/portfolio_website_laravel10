<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {
        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogcategory'));
    }

    public function AddBlogCategory()
    {
        return view('admin.blog_category.blog_category_add');
    }

    public function StoreBlogCategory(Request $request)
    {
        // $request->validate([
        //     'blog_category' => 'required',
        // ]);


        BlogCategory::insert([
            'blog_category' => $request->blog_category,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function EditBlogCategory($id)
    {
        $editData = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('editData'));
    }

    public function UpdateBlogCategory(Request $request)
    {
        $request->validate([
            'blog_category' => 'required',
        ]);


        BlogCategory::findOrFail($request->id)->update([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function DeleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);
    }




} // End Class
