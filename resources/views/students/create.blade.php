@extends('layouts.admin')

@section('title','Thêm mới Sinh viên')

@section('content')
    <form action="{{route('students.store')}}" method='post'>
        @csrf
        <div class="form-group">
          <label for="tennhomsanpham">Tên sinh viên</label>
          <input type="text" value="" class="form-control" name="name" id="tennhomsanpham" aria-describedby="helpId" placeholder="Tên sinh viên">

        </div>

        <div class="form-group">
          <label for="uutien">Mã số sin viên</label>
          <input type="text" value="" class="form-control" name="mssv" id="uutien" aria-describedby="helpId" placeholder="Mã số sinh viên">

        </div>
        <div class="form-group">
            <label for="tennhomsanpham">Phone</label>
            <input type="text" value="" class="form-control" name="phone" id="tennhomsanpham" aria-describedby="helpId" placeholder="Phone">

          </div>

          <div class="form-group">
            <label for="uutien">Email</label>
            <input type="email" value="" class="form-control" name="email" id="uutien" aria-describedby="helpId" placeholder="Email">

          </div>

          <div class="form-group">
            <label for="uutien">Số phòng</label>
            <select class="form-control" name="room_id" id="trangthai">
                <option value=1 @if (old('room_id')==1) selected='selected' @endif>Room 1</option>
                <option value=0 @if (old('room_id')!=null and old('trangthai')==0) selected='selected' @endif>Room Khác</option>
              </select>

          </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
@endsection
