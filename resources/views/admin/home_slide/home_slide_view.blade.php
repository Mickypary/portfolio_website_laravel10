@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Home Slide</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">HomeSlide Setup</li>
          <li class="breadcrumb-item active">Home Slide</li>
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
                  <form method="POST" action="{{ route('update.slide') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $homeslide->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="{{ $homeslide->title }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="short_title" class="col-md-4 col-lg-3 col-form-label">Short Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="short_title" type="text" class="form-control" id="short_title" value="{{ $homeslide->short_title }}">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="video_url" class="col-md-4 col-lg-3 col-form-label">Video Url</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="video_url" type="text" class="form-control" id="video_url" value="{{ $homeslide->video_url }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Slider Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                          <input type="file" name="home_slide" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($homeslide->home_slide) ? asset($homeslide->home_slide) : url('upload/no_image.jpg')) }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update HomeSlide</button>
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