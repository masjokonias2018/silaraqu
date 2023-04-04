@extends('admin.app')
@section('judul', 'Dashboard')
@section('dashboard', 'active')
@section('content')
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$jumlah}} Orang</h3>
                <p>Jumlah Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="/siswa" class="small-box-footer">
                Detail <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$jumlahg}} Orang</h3>

                <p>Jumlah Guru</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-clock"></i>
              </div>
              <a href="/guru" class="small-box-footer">
                Detail <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>  
@endsection