@extends('layout.index')

@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6><br>
				 <a href="trangchu" style="color: green;font-size: 20px"><span>< </span>Tiếp tục mua sắm</a>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			
			<form action="dathang" method="post" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="ten">Họ tên*</label>
							<input type="text" id="ten" name="ten" placeholder="Họ tên" required>
						</div>
						<div class="form-block">
							<label>Giới tính </label>
							<input id="gioitinh" type="radio" class="input-radio" name="gioitinh" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gioitinh" type="radio" class="input-radio" name="gioitinh" value="nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="diachi">Địa chỉ*</label>
							<input type="text" name="diachi" id="diachi" placeholder="HCM" required>
						</div>
						

						<div class="form-block">
							<label for="sdt">Điện thoại*</label>
							<input type="text" name="sdt" id="sdt" required>
						</div>
						
						<div class="form-block">
							<label for="ghichu">Ghi chú</label>
							<textarea name="ghichu" id="ghichu"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										@foreach ($products as $prd)
									
										<div class="cart-item">
										<div class="media">
											<a class="cart-item-delete" href="xoagiohang/{{$prd['item']['id']}}" ><i class="fa fa-times"></i></a>
											<a class="pull-left"><img src="source/image/sach/{{$prd['item']['hinh']}}" alt=""></a>
											<div class="media-body">
												<span class="cart-item-title" style="font-size: 20px;margin-top: 5px">{{$prd['item']['name']}}</span>
												
												<span class="cart-item-amount" style="font-size: 20px;margin-top: 15px;">{{$prd['qty']}} * <span>{{number_format($prd['item']['gia'])}}</span></span>
											</div>
										</div>
									</div>
									@endforeach		
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">{{number_format($totalPrice)}}<u>đ</u></h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="phuongthuc_thanhtoan" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
															
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="phuongthuc_thanhtoan" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
															
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button class="btn-info btn-lg" type="submit">Đặt hàng </button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection