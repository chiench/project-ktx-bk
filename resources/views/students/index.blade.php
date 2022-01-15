@extends('layouts.admin')

@section('title','Danh sách sinh viên')

@section('content')
    <div class="row my-2">
        <div class="col-md-8">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" name="key" value="{{request()->key}}" class="form-control" placeholder="Từ khóa" aria-describedby="helpId">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-primary" href="{{route('students.create')}}" role="button">Thêm mới</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>MSSV</th>
                <th>Tên</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Số phòng</th>
                <th class='text-right'>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $d)
            <tr>
                <td scope="row">{{$d->id}}</td>
                <td>{{$d->mssv}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->phone}}</td>
                <td>
                    {{$d->email}}
                </td>
                <td>{{$d->room_id}}</td>
                <td class="text-right">
                    <a name="" id="" class="btn btn-sm btn-primary" href="{{route('students.edit', $d->id)}}" role="button"><i class="fa fa-edit"></i></a>
                    <a name="" id="" class="btn btn-sm btn-danger btndelete" href="{{route('students.destroy',$d->id)}}" role="button"><i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$student->links()}}


    <form id='formdelete' action="" method="post">
        @csrf @method('DELETE')
    </form>
@endsection

@section('js')
<script>
    $(".btndelete").click(function(ev){
        ev.preventDefault();
        let _href=$(this).attr('href');
        $("form#formdelete").attr('action',_href);
        if (confirm('Bạn muốn xóa bản ghi này không?'))
        {
            $("form#formdelete").submit();
        }
    });
</script>
@endsection
