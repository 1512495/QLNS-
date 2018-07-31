@extends('layout.index')

@section('content')

<div class="rev-slider">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<div class="bannercontainer" >
				<div class="banner" >
					<ul>
						@foreach ($slide as $sl)
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
					            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->hinh}}" data-src="source/image/slide/{{$sl->hinh}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->hinh}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
									</div>
								</div>

					        </li>
						@endforeach						
						</ul>
						</div>
					</div>
					<div class="tp-bannertimer">
					
				</div>
			</div>
		</div>
		<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						@foreach ($loaisach as $ls)
						@if(count($ls->sach) > 0)
							<div class="beta-products-list">
							<h4>{{$ls->name}}</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							<?php 
								$data = $ls->sach->take(4);
							?>
							<div class="row">
								@foreach ($data as $dt)
									<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="chitietsach/{{$dt->id}}"><img height="250px" src="source/image/sach/{{$dt->hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$dt->name}}</p>
											<p class="single-item-price">
												<span>{{number_format($dt->gia)}} <font color="red">đ</font></span>
											</p>
										</div>
										<div class="single-item-caption">
											@if(Auth::check())
												<a class="add-to-cart pull-left" href="addtocart/{{$dt->id}}"><i class="fa fa-shopping-cart"></i></a>
											@endif
											<a class="beta-btn primary" href="chitietsach/{{$dt->id}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
								
							</div>
						</div> <!-- .beta-products-list -->
						<br><br>	
						@endif
						@endforeach
						
						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection



@section('script')
	<script type="text/javascript">
		@if(session('thongbao'))
		{
			alert('Bạn đã đặt hàng thành công');
		}
		@endif	
	</script>
@endsection