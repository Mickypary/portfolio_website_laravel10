@extends('admin.admin_master')

@section('admin')


    <div class="pagetitle">
      <h1>Client Feedback</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Home Setup</li>
          <li class="breadcrumb-item active">Client Feedback</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <a href="{{ route('client.image.add') }}" class="btn btn-primary" >Add Client Images</a>
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
                    <th width="">Client Name</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach($clientfeedback as $key => $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->client_name }}</td>
                    <td>
                      <a href="{{ route('edit.client.feedback', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="bx bxs-edit"></i></a> |
                      <a href="{{ route('delete.client.feedback', $item->id) }}" id="delete" class="btn btn-danger" title="Delete Data"><i class="bx bxs-trash"></i></a>
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