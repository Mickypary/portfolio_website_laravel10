@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Blog Category</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blog Category Setup</li>
          <li class="breadcrumb-item active">Edit Blog Category</li>
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
                  <form method="POST" action="{{ route('update.blog.category') }}">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Blog Category</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="blog_category" type="text" class="form-control" id="blog_category" value="{{ $editData->blog_category }}">
                        @error('blog_category')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Blog Category</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </section>



@endsection