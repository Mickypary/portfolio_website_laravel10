@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Portfolio</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Portfolio Page Setup</li>
          <li class="breadcrumb-item active">Add Portfolio</li>
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
                  <form method="POST" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                  	@csrf
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Portfolio Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="portfolio_name" type="text" class="form-control" id="portfolio_name" value="">
                        @error('portfolio_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Portfolio Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="portfolio_title" type="text" class="form-control" id="portfolio_title" value="">
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
                          <option value="website">Website</option>
                          <option value="apps">Apps</option>
                          <option value="dashboard">Dashboard</option>
                          <option value="landing">Landing</option>
                          <option value="branding">Branding</option>
                          <option value="graphic">Graphic</option>
                        </select>
                        @error('portfolio_category')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="long_description" class="col-md-4 col-lg-3 col-form-label">Portfolio Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="portfolio_description" class="form-control" id="portfolio_description" style="height: 200px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Portfolio Image</label>
                      <div class="col-md-8 col-lg-9">     
                        <div class="pt-2">
                          <input type="file" name="portfolio_image" class="form-control" id="image">
                        </div>
                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Slides" width="120px" height="120px">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Add Portfolio</button>
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