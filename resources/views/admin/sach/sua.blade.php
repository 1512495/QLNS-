@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin Tức
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">               
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/sach/sua/{{$ttsach->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input class="form-control" name="name" value="{{$ttsach->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Loại sách</label>
                                <select class="form-control" name="id_loai">
                                    @foreach ($loaisach as $lt)
                                        <option @if ($lt->id == $ttsach->id_loai)
                                            {{"selected"}}
                                        @endif 
                                        value="{{$lt->id}}">{{$lt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="mota">{{$ttsach->mota}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                 <input class="form-control" name="gia" type="number" value="{{$ttsach->gia}}" />
                            </div>
                            <img src="source/image/sach/{{$ttsach->hinh}}" height="200px"><br>                            
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="hinh" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->

            
@endsection

