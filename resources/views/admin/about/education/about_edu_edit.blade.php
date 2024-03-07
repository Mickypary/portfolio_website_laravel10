@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>About page</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">About Page Setup</a></li>
          <li class="breadcrumb-item">View Education</li>
          <li class="breadcrumb-item active">Edit Education</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">


              <div class="tab-content pt-2">

                <!-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit"> -->

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('update.education') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="{{ $editData->title }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="short_title" class="col-md-4 col-lg-3 col-form-label">Short Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="date" type="text" class="form-control" id="date" value="{{ $editData->date }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Short Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="short_description" class="form-control" id="short_description" style="height: 200px">{{ $editData->short_description }}</textarea>
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Education Bio</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </section>
















@endsection