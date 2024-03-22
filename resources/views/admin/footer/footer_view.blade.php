@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Footer page</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Footer Page Setup</li>
          <li class="breadcrumb-item active">Footer Page</li>
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
                  <form method="POST" action="{{ route('footer.update') }}">
                  	@csrf

                    <input type="hidden" name="id" value="{{ $footer->id }}">
                    

                    <div class="row mb-3">
                      <label for="phone_no" class="col-md-4 col-lg-3 col-form-label">Phone No.</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone_no" type="text" class="form-control" id="phone_no" value="{{ $footer->phone_no }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="address" class="form-control" id="address" style="height: 100px">{{ $footer->address }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="{{ $footer->email }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="country" value="{{ $footer->country }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="motto" class="col-md-4 col-lg-3 col-form-label">Motto</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="motto" type="text" class="form-control" id="motto" value="{{ $footer->motto }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="short_description" class="col-md-4 col-lg-3 col-form-label">Short Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="short_description" class="form-control" id="short_description" style="height: 100px">{{ $footer->short_description }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="facebook" class="col-md-4 col-lg-3 col-form-label">Facebook</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="facebook" value="{{ $footer->facebook }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="twitter" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="twitter" value="{{ $footer->twitter }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="instagram" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="instagram" value="{{ $footer->instagram }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="linkedin" class="col-md-4 col-lg-3 col-form-label">LinkedIn</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="linkedin" value="{{ $footer->linkedin }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="youtube" class="col-md-4 col-lg-3 col-form-label">YouTube</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="youtube" type="text" class="form-control" id="youtube" value="{{ $footer->youtube }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="copyright" class="col-md-4 col-lg-3 col-form-label">Copyright</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="copyright" type="text" class="form-control" id="copyright" value="{{ $footer->copyright }}">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Footer</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </section>














@endsection