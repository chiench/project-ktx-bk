@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<div class="row">
    <div class="col-md-3">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>250</h3>

          <p>Sinh viên tối đa</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{route('rooms.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>25</h3>

            <p>Sinh viên hiện tại</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{route('students.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <!-- ./col -->
    <div class="col-md-3">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>20</sup></h3>

          <p>Phòng ở</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{route('rooms.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>8</h3>

          <p>Cán Bộ</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('managers.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    </div>
    <!-- ./col -->
  </div>
  <div style="font-size: xx-large" class="title">


  <h1>TT QUẢN LÝ KTX</h1>
  <p>
    Tổ chức, quản lý toàn diện khu KTX sinh viên. Bố trí xếp ở sinh viên nội trú đúng đối tượng, số lượng, đảm bảo thu lệ phí lưu trú của sinh viên nộp về trường đúng qui định; Đảm bảo đủ các điều kiện phục vụ sinh hoạt và học tập của sinh viên nội trú:
    Điện, nước sinh hoạt, dịch vụ ăn uống.
    An ninh trật tự, vệ sinh môi trường
    Hoạt động thể thao và văn hoá tinh thần trong khu KTX.</p>
</div>

<!-- <h2 class="text-center display-4">Search</h2>
<div class="row">
  <div class="col-md-8 offset-md-2">
    <form action="simple-results.html">
      <div class="input-group">
        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
        <div class="input-group-append">
          <button type="submit" class="btn btn-lg btn-default">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div> -->
@endsection
