@extends('template.main')
@section('title', 'Dashboard')
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
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
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
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $penduduk }}</h3>
              <p class="font-weight-bold">Penduduk</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-user-large "></i>
            </div>
            <a href="/penduduk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>{{ $disabilitas }}</h3>
              <p class="font-weight-bold">Disabilitas</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-hospital-user"></i>
            </div>
            <a href="/disabilitas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $pekerjaanCount }}</h3>
              <p class="font-weight-bold">Pekerjaan</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <a href="/pekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3>{{ $jumlahKeluarga }}</h3>
              <p class="font-weight-bold">Keluarga</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-people-roof"></i>
            </div>
            <a href="/pekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $pegawai }}</h3>
              <p>Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/pegawai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
                        <!-- small box -->  
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div> --}}
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div> --}}
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div> --}}
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

    
  </div>
  <!-- /.content -->
</div>

@endsection