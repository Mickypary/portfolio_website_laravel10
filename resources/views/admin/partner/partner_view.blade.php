@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Partner</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Home Page Setup</li>
          <li class="breadcrumb-item active">Partner</li>
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
                  <form method="POST" action="{{ route('update.partner') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $partner->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="{{ $partner->title }}">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Short Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="short_description" class="form-control" id="short_description" style="height: 200px">{{ $partner->short_description }}</textarea>
                      </div>
                    </div>




                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save</button>
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