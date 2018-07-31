@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sách
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                               @foreach ($errors->all() as $err)
                                   {{$err}}<br>
                               @endforeach
                            </div>
                        @endif

                        @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/sach/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sách" />
                            </div>
                            <div class="form-group">
                                <label>Loại sách</label>
                                <select class="form-control" name="id_loai">
                                    @foreach ($loaisach as $lt)
                                        <option value="{{$lt->id}}">{{$lt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                 <input class="form-control" name="gia" type="number"/>
                            </div>                            
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="hinh" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
  </div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#TheLoai').change(function() {
                var idTheLoai = $(this).val();
                $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
                    $('#LoaiTin').html(data);
                });
            });
        });
    </script>
@endsection