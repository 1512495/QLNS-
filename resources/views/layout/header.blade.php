<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a ><i class="fa fa-home"></i> Nhóm 18 - TF </a></li>
						<li><a "><i class="fa fa-phone"></i> 0163 808 2216</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if (Auth::check())
							<li><a href="profile/{{Auth::user()->id}}"><span class="glyphicon glyphicon-user">&nbsp;{{Auth::user()->name}}</a>

							</li>
							<li><a href="dangxuat">Đăng xuất</a></li>

							
						@else
							<li><a href="dangky">Đăng kí</a></li>
							<li><a href="dangnhap">Đăng nhập</a></li>
						@endif
						<li><a href="admin/dangnhap">ADMIN</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a  id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="post" id="searchform" action="timkiem">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					        <input type="text" name="tukhoa" id="tukhoa" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						@if (Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (
								@if (Session::has('cart'))
									{{Session('cart')->totalQty}}
								@else
									Trống
								@endif
								) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@if (isset($products))
									@foreach ($products as $prd)
									
									<div class="cart-item">
										<div class="media">
											<a class="pull-left" href="#"><img src="source/image/sach/{{$prd['item']['hinh']}}" alt=""></a>
											<div class="media-body">
												<span class="cart-item-title">{{$prd['item']['name']}}</span>
												
												<span class="cart-item-amount">{{$prd['qty']}}*<span>{{$prd['item']['gia']}}</span></span>
											</div>
										</div>
									</div>
									@endforeach		
								@endif
															
								

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="dathang" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="trangchu">Trang chủ</a></li>
						<li><a>Loại Sách</a>
							<ul class="sub-menu">
								@foreach ($loai_sach as $ls)
									@if(count($ls->sach)>0)
									<li><a href="loaisach/{{$ls->id}}">{{$ls->name}}</a></li>
									@endif
								@endforeach
								
							</ul>
						</li>
						<li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
						<li><a href="lienhe">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->