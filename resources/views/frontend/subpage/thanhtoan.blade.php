@extends("frontend.index")
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-heading">
					<h1 class="title">Thanh Toán</h1>
				</div><!-- /.page-title-heading -->
				<div class="breadcrumbs">
					<ul>
						<li><a href="/">Trang Chủ</a></li>
						<li><a href="giohang">Giỏ Hàng</a></li>
					</ul>
				</div><!-- /.breadcrumbs -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.page-title -->
<section class="flat-row main-shop shop-4col">
	<div class="container">
		<div class="row">
			
			@include('frontend.subpage.boloc')

			<div class="product-content product-fourcolumn clearfix">
				<form class="form-horizontal" method="post" action="shopping/donhang">
					{{ csrf_field() }}  
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-lg-5 col-md-5 col-sm-5col-xs-12 col-md-pull-5 col-sm-pull-5">
							<!--SHIPPING METHOD-->
							<div class="panel panel-info">
								<div class="thanhtoan alert alert-primary" role="alert">
									Thông tin thanh toán
								</div>
								<div class="panel-body">

									<div class="form-group">
										<label for="exampleInputEmail1">Họ Tên </label>
										<input type="text" class="form-control" 
										value="{{Auth::guard('KhachHang')->user()->HoTen}}" id="exampleInputEmail1" 
										name="hoten"aria-describedby="emailHelp" >
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Địa chỉ</label>
										<input type="text" class="form-control" id="exampleInputPassword1"
										value="{{Auth::guard('KhachHang')->user()->DiaChi}}" 
										name="diachi">
									</div>
									<div class="form-group">
										<label for="inputAddress">Phone</label>
										<input type="text" class="form-control" id="inputAddress" 
										value="{{Auth::guard('KhachHang')->user()->SoDienThoai}}" name="sdt">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Tổng Tiền</label>
										<input type="text" class="form-control" 
										value="{{Cart::subtotal()}}"
										id="exampleInputPassword1" name="tongtien">
									</div>
									<div class="form-group">
										<label for="inputAddress">Ghi chú</label>
										<textarea class="form-control" name="ghichu" id="" cols="30" rows="10"></textarea>
									</div>
									
								</div>
								<button type="submit" name="dangky" class="submit btn btn-primary">Thanh Toán</button>
							</div>
							<!--SHIPPING METHOD END-->

						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-md-push-5 col-sm-push-5">
							<!--REVIEW ORDER-->
							<div class="panel panel-info">
								<div class="thanhtoan alert alert-primary" role="alert">
									Thông tin đơn hàng
									<div class="pull-right"><small><a class="afix-1" href="giohang">Sửa giỏ hàng</a></small></div>
								</div>
								<label for="exampleInputEmail1">Đơn hàng </label>
								<div class="panel-body">
									<?php $sum=0; ?>
									@foreach($sanpham as $sp)
									<div class="form-group">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img class="img-responsive" src="upload/sanpham/{{$sp->options->hinh}}" />
											</div>
											<div class="col-sm-6 col-xs-6">
												<div class="col-xs-12">{{$sp->name}}</div>
												<div class="col-xs-12"><small>Số lượng:<span>{{$sp->qty}}</span></small></div>
											</div>
											<div class="col-sm-3 col-xs-3 text-right">
												<h6>{{formatPrice(($sp->qty*$sp->price))}}</h6>
											</div>
										</div>
									</div>
									<?php $sum+=$sp->qty*$sp->price; ?>
									@endforeach

									<div class="col-xs-12">
										<strong>Tổng Tiền</strong>
										<div class="pull-right"><span>{{formatPrice($sum)}}</span></div>
									</div>
									<div class="col-xs-12">
										<small>Phí</small>
										<div class="pull-right"><span>0</span></div>
									</div>
								</div>
								<div class="form-group"><hr /></div>
								<div class="form-group">
									<div class="col-xs-12">
										<strong>Tổng Tiền Thanh Toán</strong>
										<div class="pull-right"><span>{{formatPrice($sum)}}</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
						<!--REVIEW ORDER END-->
					</div>
				</form>
			</form>
			
		</div><!-- /.col-md-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->

</section><!-- /.flat-row -->

@endsection
