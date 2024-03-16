
@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Home Setup</li>
          <li class="breadcrumb-item active">Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <a href="{{ route('add.service') }}" class="btn btn-primary" >Add Service</a>
    <br><br>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Datatables</h5> -->

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="5%">Sl.</th>
                    <th width="15%">Title</th>
                    <th width="15%">Short Description</th>
                    <th width="5%">Icon</th>
                    <th width="10%">Home Image</th>
                    <th width="10%">Detail Image</th>
                    <th width="10%">Wrap Image</th>
                    <th width="10%">Wrap Image</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($service as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->short_description, 40);  }}</td>
                    <td><img src="{{ asset($item->icon) }}" style="width: 60px; height: 50px;"></td>
                    <td><img src="{{ asset($item->main_image) }}" style="width: 60px; height: 50px;"></td>
                    <td><img src="{{ asset($item->detail_image) }}" style="width: 60px; height: 50px;"></td>
                    <td><img src="{{ asset($item->wrap_image1) }}" style="width: 60px; height: 50px;"></td>
                    <td><img src="{{ asset($item->wrap_image2) }}" style="width: 60px; height: 50px;"></td>
                    <td>
                      <a href="{{ route('edit.service', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="bx bxs-edit"></i></a> |
                      <a href="{{ route('portfolio.delete', $item->id) }}" id="delete" class="btn btn-danger" title="Delete Data"><i class="bx bxs-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- <div><br><br><br><br><br><br><br><br></div> -->






@endsection