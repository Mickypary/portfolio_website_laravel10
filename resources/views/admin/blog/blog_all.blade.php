

@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Blog Setup</li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <a href="{{ route('add.blog') }}" class="btn btn-primary" >Add Blog</a>
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
                    <th width="15%">Blog Category</th>
                    <th width="15%">Blog Title</th>
                    <th width="15%">Blog Tags</th>
                    <th width="10%">Blog Image</th>
                    <th width="10%">Detail Image</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($blogs as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->category->blog_category }}</td>
                    <td>{{ $item->blog_title }}</td>
                    <td>{{ $item->blog_tags }}</td>
                    <td><img src="{{ asset($item->blog_image) }}" style="width: 60px; height: 50px;"></td>
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