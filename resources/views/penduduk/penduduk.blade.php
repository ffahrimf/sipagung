@extends('template.main')
@section('title', 'Penduduk')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="text-right">
                <div class="">
                  <a href="/print" target="blank" class="btn btn-primary mr-1"><i class="fa-solid fa-print"></i>
                    Print
                    Penduduk</a>
                  <a href="/penduduk/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add
                    Penduduk</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-striped table-bordered table-hover text-center" style="width: 100%">
    <thead>
        <tr>
            <th>#</th>
            <th>NIK</th>
            <th>KK</th>
            <th>Nama</th>
            <th>RT</th>
            <th>RW</th>
            <th>Dusun</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penduduk as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->no_kk }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->rt }}</td>
            <td>{{ $data->rw }}</td>
            <td>{{ $data->dusun }}</td>
            <td>{{ $data->pekerjaan }}</td>
            <td>
                <form class="d-inline" action="/penduduk/{{ $data->nik }}/edit" method="GET">
                    <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
                        <i class="fa-solid fa-pen"></i> Edit
                    </button>
                </form>
                <form class="d-inline" action="/penduduk/{{ $data->nik }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" id="btn-delete">
                        <i class="fa-solid fa-trash-can"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
  </div>
</div>

@endsection