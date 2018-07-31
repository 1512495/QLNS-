@extends('layout.index')

@section('content')	
<div id="page-wrapper" style="margin-left: 300px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thông tin
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if (count($errors)>0)
                           @foreach ($errors->all() as $err)
                               <div class="alert-danger alert">
                                   {{$err}}<br>
                               </div>
                           @endforeach
                        @endif
                        @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/user/sua/{{$user->id}}" method="POST" > 
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" value="{{$user->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="{{$user->password}}"/>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input type="password" class="form-control" name="passwordAgain" value="{{$user->password}}" />
                            </div> 
                            <div class="form-group">
                                <label>Quyền truy cập</label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="0" 
                                    @if ($user->quyen == 0)
                                       {{"checked"}} 
                                    @endif>
                                    Thường
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="1" 
                                    @if ($user->quyen == 1)
                                       {{"checked"}} 
                                    @endif>
                                    Admin
                                </label>
                            </div>        
                            <a class="btn btn-default" href="trangchu" role="button">Thoát</a>                  
                            
                           
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection	