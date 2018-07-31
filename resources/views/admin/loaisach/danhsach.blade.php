@extends('admin.layout.index')
@section('content')
	<!-- Page Content -->
	<div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Loại sách
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
	                        <th>Delete</th>
	                        <th>Edit</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($loaisach as $ls)
	                		<tr class="odd gradeX" align="center">
		                        <td>{{$ls->id}}</td>
		                        <td>{{$ls->name}}</td>
		                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa hay không')" href="admin/loaisach/xoa/{{$ls->id}}"> Delete</a></td>
	                        	<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaisach/sua/{{$ls->id}}">Edit</a></td>
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