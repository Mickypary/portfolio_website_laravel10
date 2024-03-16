

@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Service</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home Setup</li>
          <li class="breadcrumb-item active">Add Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-10">

          <div class="card">
            <div class="card-body pt-3">


              <div class="tab-content pt-2">

                <!-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit"> -->

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('store.service') }}" enctype="multipart/form-data">
                  	@csrf
                    

                    <div class="row mb-3">
                      <label for="client_name" class="col-md-4 col-lg-3 col-form-label">Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="title" type="text" class="form-control" id="title" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="client_feedback" class="col-md-4 col-lg-3 col-form-label">Short Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="short_description" class="form-control tinymce-editor" id="short_description" style="height: 200px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="client_feedback" class="col-md-4 col-lg-3 col-form-label">Long Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="long_description" class="form-control tinymce-editor" id="long_description" style="height: 200px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="client_feedback" class="col-md-4 col-lg-3 col-form-label">Other Text</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="other_text" class="form-control tinymce-editor" id="other_text" style="height: 200px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Icon</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="icon" class="form-control" id="icon">
                        </div>
                        <!-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px"> -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Home Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="home_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Detail Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="detail_image" class="form-control" id="image">
                        </div>
                        <!-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px"> -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Wrap Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image1" class="form-control" id="image">
                        </div>
                        <!-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px"> -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Wrap Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image2" class="form-control" id="image">
                        </div>
                        <!-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px"> -->
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Add Service</button>
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