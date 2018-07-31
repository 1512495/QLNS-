@extends('layout.index')

@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="dangky" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" required>
						</div>
						<div id="HopLe" style="margin-left: 200px;"></div>

						<div class="form-block">
							<label for="your_last_name">Họ tên</label>
							<input type="text" id="name" name="name" required>
						</div>

						<div class="form-block">
							<label for="phone">Mật khẩu</label>
							<input type="password" name="password" id="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu</label>
							<input type="password" name="re_password" id="re_password" required>
						</div>
						<div id="checkPass" style="margin-left: 200px;"></div>
						<div class="form-block">
							<label for="quyen">Quyền</label>
							<div style="margin-left: 140px">
								<label class="radio-inline"><input type="radio" name="quyen" id="user" value=0 checked>User</label>
								<label class="radio-inline"><input type="radio" name="quyen" id="admin" value=1>Admin</label>
							</div>								
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection

@section('script')
	<script>
		$(document).ready(function() {
			$("#email").change(function() {
				var em=$(this).val();
				$.get("ajax/dangky/"+em,function(data){
					$("#HopLe").html(data);
				});
			});

			$("#re_password").blur(function(){
				var pass = $("#password").val();
				var re_pass = $(this).val();
				if(pass !== re_pass)
				{
					$("#checkPass").html("<font color=red>Mật khẩu không khớp</font>");
				}
				else{
					$("#checkPass").html("");
				}

			});
		});	
	</script>
@endsection