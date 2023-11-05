@extends('admin.layout.base')
@section('body')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><strong>Dashboard</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#109618">
              <div class="inner">
                <h3 style="color:#fff">{{ count($District) }}</h3>

                <p><strong style="color:#fff">District</strong></p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#dc3912">
              <div class="inner">
                <h3 style="color:#fff">{{ count($block) }}</h3>

                <p style="color:#fff">Block</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#990099">
              <div class="inner">
                <h3 style="color:#fff">{{ count($village) }}</h3>

                <p style="color:#fff">Village</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#3366cc">
              <div class="inner">
                <h3 style="color:#fff">{{count($gram_panchayat)}}</h3>

                <p style="color:#fff">GP</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
        </div>
    </section>
@endsection 

