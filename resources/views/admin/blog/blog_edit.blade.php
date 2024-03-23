@extends('admin.admin_master')

@section('admin')

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>


    <div class="pagetitle">
      <h1>Blog</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blog Setup</li>
          <li class="breadcrumb-item active">Edit Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">

             


              <div class="tab-content pt-2">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('update.blog') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Blog Category</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="blog_category_id" class="form-control">
                          <option value="">Select Category</option>
                          @foreach($categories as $cat)
                          <option value="{{ $cat->id }}" {{ ($cat->id == $editData->blog_category_id) ? 'selected' : '' }}>{{ $cat->blog_category }}</option>
                          @endforeach
                        </select>
                        @error('blog_category_id')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Blog Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="blog_title" type="text" class="form-control" id="blog_title" value="{{ $editData->blog_title }}">
                        @error('blog_title')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Blog Tags</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="blog_tags" type="text" class="form-control" data-role="tagsinput" value="{{ $editData->blog_tags }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Blog Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="blog_description" class="form-control tinymce-editor" id="portfolio_description" style="height: 200px">{{ $editData->blog_description }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Blog Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" name="blog_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->blog_image)) ? asset($editData->blog_image) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Detail Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="detail_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->detail_image)) ? asset($editData->detail_image) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Wrap Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image" class="form-control" id="image">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Wrap Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image2" class="form-control" id="image">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Blog Thumb</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="blog_thumb" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->blog_thumb)) ? asset($editData->blog_thumb) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Post Thumb</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="post_thumb" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->post_thumb)) ? asset($editData->post_thumb) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Video URL</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="video_url" type="text" class="form-control" id="video_url" value="{{ $editData->video_url }}">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Blog</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </section>


    <script type="text/javascript">
  $(document).ready(function () {
    $('#image').change(function (e) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0'])
    });
  });
</script>



@endsection