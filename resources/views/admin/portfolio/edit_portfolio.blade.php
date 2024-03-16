@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Portfolio</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Portfolio Page Setup</li>
          <li class="breadcrumb-item active">Edit Portfolio</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">

             


              <div class="tab-content pt-2">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Portfolio Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="portfolio_name" type="text" class="form-control" id="portfolio_name" value="{{ $editData->portfolio_name }}">
                        @error('portfolio_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Portfolio Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="portfolio_title" type="text" class="form-control" id="portfolio_title" value="{{ $editData->portfolio_title }}">
                        @error('portfolio_title')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Portfolio Category</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="portfolio_category" class="form-control">
                          <option value="">Select Category</option>
                          <option value="website" {{ $editData->portfolio_category == 'website' ? 'selected' : ''}}>Website</option>
                          <option value="apps" {{ $editData->portfolio_category == 'apps' ? 'selected' : ''}}>Apps</option>
                          <option value="dashboard" {{ $editData->portfolio_category == 'dashboard' ? 'selected' : ''}}>Dashboard</option>
                          <option value="landing" {{ $editData->portfolio_category == 'landing' ? 'selected' : ''}}>Landing</option>
                          <option value="branding" {{ $editData->portfolio_category == 'branding' ? 'selected' : ''}}>Branding</option>
                          <option value="graphic" {{ $editData->portfolio_category == 'graphic' ? 'selected' : ''}}>Graphic</option>
                        </select>
                        @error('portfolio_category')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Portfolio Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="portfolio_description" class="form-control tinymce-editor" id="portfolio_description" style="height: 200px">{{ $editData->portfolio_description }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Portfolio Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" name="portfolio_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->portfolio_image)) ? asset($editData->portfolio_image) : url('upload/no_image.jpg') }}" alt="portfolio" width="120px" height="120px">
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
                      <div class="col-md-4 col-lg-4">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image1" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->wrap_image1)) ? asset($editData->wrap_image1) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                      <div class="col-md-4 col-lg-4">     
                        <div class="pt-2">
                          <input type="file" multiple name="wrap_image2" class="form-control" id="image" placeholder="Wrap Image">
                          <img id="showImage" src="{{ (!empty($editData->wrap_image2)) ? asset($editData->wrap_image2) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                        </div>
                      </div>

                    </div>


                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="client_name" type="text" class="form-control" id="client_name" value="{{ $editData->client_name }}" placeholder="Client Name">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <input name="client_phone" type="text" class="form-control" id="client_phone" value="{{ $editData->client_phone }}" placeholder="Client Phone">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="client_mail" type="text" class="form-control" id="client_mail" value="{{ $editData->client_mail }}" placeholder="Client Mail">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <textarea class="form-control" name="client_address" id="client_address" placeholder="Client Address">{{ $editData->client_address }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="project_name" type="text" class="form-control" id="project_name" value="{{ $editData->project_name }}" placeholder="Project Name">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <input name="project_link" type="text" class="form-control" id="project_link" value="{{ $editData->project_link }}" placeholder="Project Link">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="project_date" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="project_date" type="date" class="form-control" id="project_date" value="{{ $editData->project_date }}" placeholder="Project Date">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <input name="project_location" type="text" class="form-control" id="project_location" value="{{ $editData->project_location }}" placeholder="Project Location">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="facebook_handle" type="text" class="form-control" id="facebook_handle" value="{{ $editData->facebook_handle }}" placeholder="Facebook">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <input name="twitter_handle" type="text" class="form-control" id="twitter_handle" value="{{ $editData->twitter_handle }}" placeholder="Twitter">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="instagram_handle" type="text" class="form-control" id="instagram_handle" value="" placeholder="Instagram">
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <input name="linkedin_handle" type="text" class="form-control" id="linkedin_handle" value="{{ $editData->linkedin_handle }}" placeholder="LinkedIn">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label"></label>
                      <div class="col-md-4 col-lg-4">
                        <input name="youtube_handle" type="text" class="form-control" id="youtube_handle" value="{{ $editData->youtube_handle }}" placeholder="Youtube">
                      </div>
                      <div class="col-md-4 col-lg-4">     
                        <div class="pt-2">
                          <input type="file" multiple name="wr_image" class="form-control" id="image" placeholder="Wrap Image">
                        </div>
                        <img id="showImage" src="{{ (!empty($editData->wr_image)) ? asset($editData->wr_image) : url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Portfolio</button>
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