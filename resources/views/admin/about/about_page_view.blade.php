@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>About page</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">About Page Setup</li>
          <li class="breadcrumb-item active">About Page</li>
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
                  <form method="POST" action="{{ route('update.about') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="{{ $aboutpage->title }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="short_title" class="col-md-4 col-lg-3 col-form-label">Short Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="short_title" type="text" class="form-control" id="short_title" value="{{ $aboutpage->short_title }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Short Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="short_description" class="form-control" id="short_description" style="height: 200px">{{ $aboutpage->short_description }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Long Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="long_description" class="form-control tinymce-editor" id="long_description">{{ $aboutpage->long_description }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">About Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                          <input type="file" name="about_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($aboutpage->about_image) ? asset($aboutpage->about_image) : url('upload/no_image.jpg')) }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Resume</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" name="resume" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($aboutpage->resume) ? asset($aboutpage->resume) : url('upload/no_image.jpg')) }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update About Page</button>
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