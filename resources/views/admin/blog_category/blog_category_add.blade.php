@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Blog Category</h1>
      <br>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blog Category Setup</li>
          <li class="breadcrumb-item active">Add Blog Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">

             


              <div class="tab-content pt-2">

                  <!-- Profile Edit Form -->
                  <form method="POST" id="myForm" action="{{ route('store.blog.category') }}">
                  	@csrf
                    

                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">Blog Category</label>
                      <div class="col-md-8 col-lg-9 form-group">
                        <input name="blog_category" type="text" class="form-control" id="blog_category" value="">
                      </div>
                    </div>



                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Add Blog Category</button>
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
        $('#myForm').validate({
            rules : {
                blog_category: {
                    required: true,
                },
            },
            messages: {
              blog_category: {
                  required: 'Please Enter Blog Category',
              },
            },
            errorElement: 'span',
            errorPlacement: function(error,element) {
              error.addClass('invalid-feedback');
              element.closest('form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
              $(element).addClass('is-invalid')
            },
            unhighlight: function(element, errorClass, validClass) {
              $(element).removeClass('is-invalid')
            },
        })
      });




    </script>



@endsection