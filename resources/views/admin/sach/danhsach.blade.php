@extends('admin.layout.index')
@section('content')
	<!-- Page Content -->
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Sách
	                    <small>Danh sách</small>
	                </h1>
	            </div>
	            @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
	            <!-- /.col-lg-12 -->
	            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                <thead>
	                    <tr align="center">
	                        <th>ID</th>
	                        <th>Tên</th>
	                        <th>Mô tả</th>
	                        <th>Giá</th>
	                        <th>Hình ảnh</th>
	                        <th>id_loai</th>
	                        <th>Delete</th>
	                        <th>Edit</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($sach as $tt)
	                    	<tr class="even gradeC" align="center">
		                        <td>{{$tt->id}}</td>
		                        <td>{{$tt->name}}</td>
		                        <td><p>{{$tt->mota}}</p></td>
		                        <td>{{$tt->gia}}</td>
								<td>
								<img width="100px" src="source/image/sach/{{$tt->hinh}}" width="100px">
		                        </td>		                       
		                        <td>{{$tt->id_loai}}</td>		                        
		                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc muốn xóa không ?')" href="admin/sach/xoa/{{$tt->id}}"> Delete</a></td>
		                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sach/sua/{{$tt->id}}">Edit</a></td>
	                    	</tr>
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
@endsection