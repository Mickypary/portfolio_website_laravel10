@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>View Multi Image</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">About Page Setup</li>
          <li class="breadcrumb-item active">Multi Image</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>

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
                    <th>Sl.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Subject</th>
                    <th>Budget</th>
                    <th>Date</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php($i = 1)
                	@foreach($contacts as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->budget }}</td>
                    <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                    <td>
                    	<a href="{{ route('delete.message', $item->id) }}" id="delete" class="btn btn-danger" title="Delete Data"><i class="bx bxs-trash"></i></a>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        View
                      </button>

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