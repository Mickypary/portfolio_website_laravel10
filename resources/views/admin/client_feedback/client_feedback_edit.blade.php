@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Client Feedback</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home Setup</li>
          <li class="breadcrumb-item active">Edit Client Feedback</li>
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
                  <form method="POST" action="{{ route('update.client.feedback') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    

                    <div class="row mb-3">
                      <label for="client_name" class="col-md-4 col-lg-3 col-form-label">Client Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="client_name" type="text" class="form-control" id="client_name" value="{{ $editData->client_name }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="client_feedback" class="col-md-4 col-lg-3 col-form-label">Client Feedback</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="client_feedback" class="form-control" id="client_feedback" style="height: 200px">{{ $editData->client_feedback }}</textarea>
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Update Client Feedback</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                <!-- </div> -->


            </div>
          </div>

        </div>
      </div>
    </section>



@endsection