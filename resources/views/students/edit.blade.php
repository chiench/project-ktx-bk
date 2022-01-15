@extends('layouts.admin')

@section('title','Cập nhật thông tin sinh viên')

@section('content')
    <form action="{{route('students.update',$student->id)}}" method='post'>
        @csrf @method('PUT')
        <div class="form-group">
            <label for="tennhomsanpham">Tên sinh viên</label>
            <input type="text" value="{{$student->name}}" class="form-control" name="ten" id="tennhomsanpham" aria-describedby="helpId" placeholder="Tên sinh viên">

          </div>

          <div class="form-group">
            <label for="uutien">Mã số sin viên</label>
            <input type="text" value="{{$student->mssv}}" class="form-control" name="uutien" id="uutien" aria-describedby="helpId" placeholder="Mã số sinh viên">

          </div>
          <div class="form-group">
              <label for="tennhomsanpham">Phone</label>
              <input type="text" value="{{$student->phone}}" class="form-control" name="ten" id="tennhomsanpham" aria-describedby="helpId" placeholder="Phone">

            </div>

            <div class="form-group">
              <label for="uutien">Email</label>
              <input type="email" value="{{$student->email}}" class="form-control" name="uutien" id="uutien" aria-describedby="helpId" placeholder="Email">

            </div>

            <div class="form-group">
              <label for="uutien">Số phòng</label>
              <input type="number" value="{{$student->room_id}}" class="form-control" name="uutien" id="uutien" aria-describedby="helpId" placeholder="Số phòng">

            </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
