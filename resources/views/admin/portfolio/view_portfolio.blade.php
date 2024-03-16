@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Portfolio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Portfolio Page Setup</li>
          <li class="breadcrumb-item active">Portfolio</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <a href="{{ route('add.portfolio') }}" class="btn btn-primary" >Add Portfolio</a>
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
                    <th width="20%">Portfolio Name</th>
                    <th width="25%">Portfolio Title</th>
                    <th width="15%">Category</th>
                    <th width="10%">Image</th>
                    <th width="10%">Detail Image</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($portfolio as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->portfolio_name }}</td>
                    <td>{{ $item->portfolio_title }}</td>
                    <td>{{ $item->portfolio_category }}</td>
                    <td><img src="{{ asset($item->portfolio_image) }}" style="width: 60px; height: 50px;"></td>
                    <td><img src="{{ asset($item->detail_image) }}" style="width: 60px; height: 50px;"></td>
                    <td>
                      <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="bx bxs-edit"></i></a> |
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