@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>About page</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">About Page Setup</li>
          <li class="breadcrumb-item active">Edit Multi Image</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">


              <div class="tab-content pt-2">

                <!-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit"> -->

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('update.multi.image', $editMultiImage->id) }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="">


                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Multi Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="multi_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editMultiImage)) ? asset($editMultiImage->multi_image) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Multi Image</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row"><br><br><br><br><br></div>
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