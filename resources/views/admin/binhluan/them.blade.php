@extends('admin.layout.index')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">DANH SÁCH</h4>
            
            <div class="col-lg-7" style="padding-bottom:120px">
				@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}
					<br>
					@endforeach
				</div>
				@endif
				<form action="admin/khachhang/them" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Email</label>
						<input  class="form-control"  name="email" placeholder="nhập email " />
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" class="form-control" value="" name="matkhau" placeholder="nhập mat khau " />
					</div>
					<div class="form-group">
						<label>Nhập lại mật khẩu</label>
						<input type="password" class="form-control" value="" name="matkhauagain" placeholder="nhập lại mật khẩu " />
					</div>
					<div class="form-group">
						<label>Họ tên</label>
						<input class="form-control" name="ten" placeholder="nhập họ tên " />
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input class="form-control"  name="sdt" placeholder="nhập sdt " />
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input class="form-control" name="diachi" placeholder="nhập địa chỉ " />
					</div>
					<button type="submit" class="btn btn-default">Thêm</button>
					<button type="reset" class="btn btn-default">Huỷ</button>
					<form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>                         
                                   
@endsection