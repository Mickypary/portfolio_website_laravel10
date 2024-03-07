@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Award</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">About Page Setup</li>
          <li class="breadcrumb-item active">Award</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <a href="{{ route('award.add') }}" class="btn btn-primary" >Add Award</a>
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
                    <th width="50%">Title</th>
                    <th width="15%">Image</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($aboutaward as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ asset($item->award_image) }}" style="width: 60px; height: 50px;"></td>
                    <td>
                      <a href="{{ route('award.edit', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="bx bxs-edit"></i></a> |
                      <a href="{{ route('award.delete', $item->id) }}" id="delete" class="btn btn-danger" title="Delete Data"><i class="bx bxs-trash"></i></a>
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