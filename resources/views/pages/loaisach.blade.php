@extends('layout.index')

@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$ten_loai->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>{{$ten_loai->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							
							@foreach ($loaisach as $ls)
								@if(count($ls->sach)>0)
									<li><a href="loaisach/{{$ls->id}}">{{$ls->name}}</a></li>
								@endif
							@endforeach
						
							
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>{{$ten_loai->name}}</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>

							<div class="row">
								
								@foreach ($sach_theoloai as $stl)
									<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="chitietsach/{{$stl->id}}"><img height="260px" src="source/image/sach/{{$stl->hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$stl->name}}</p>
											<p class="single-item-price">
												<span>{{number_format($stl->gia)}}<font color="red">đ</font></span>
											</p>
										</div>
										<div class="single-item-caption">
											@if(Auth::check())
											<a class="add-to-cart pull-left" href="addtocart/{{$stl->id}}"><i class="fa fa-shopping-cart"></i></a>
											@endif
											<a class="beta-btn primary" href="chitietsach/{{$stl->id}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Thể loại sách khác</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach ($sach_khac as $sk)
									<div class="col-sm-4">
									<div class="single-item" style="margin-top: 20px">
										<div class="single-item-header">
											<a href="chitietsach/{{$sk->id}}"><img height="250px" src="source/image/sach/{{$sk->hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sk->name}}</p>
											<p class="single-item-price">
												<span>{{number_format($sk->gia)}}<font color="red">đ</font></span>
											</p>
										</div>
										<div class="single-item-caption">
											@if(Auth::check())
											<a class="add-to-cart pull-left" href="addtocart/{{$sk->id}}"><i class="fa fa-shopping-cart"></i></a>
											@endif
											<a class="beta-btn primary" href="chitietsach/{{$sk->id}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>

								</div>

								@endforeach

							</div>
							<div class="row" style="text-align: center;">
									{{$sach_khac->links()}}
								</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
