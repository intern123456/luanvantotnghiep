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
				<form action="admin/quantri/sua/{{$quantri->id}}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Email</label>
						<input disabled="true" class="form-control" value="{{$quantri->Email}}" name="email" placeholder="nhập email " />
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
						<input class="form-control" value="{{$quantri->HoTen}}" name="ten" placeholder="nhập họ tên " />
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input class="form-control" value="{{$quantri->SoDienThoai}}" name="sdt" placeholder="nhập địa chỉ " />
					</div>
					<div class="form-group">
						<label>Quyền</label>
						<label class="radio-inline">
							<input
							@if($quantri->Quyen==1)
								{{'checked'}}
							@endif	
							 name="quyen" value="1" checked="" type="radio">QT tài khoản
						</label>
						<label class="radio-inline">
							<input
							@if($quantri->Quyen==2)
								{{'checked'}}
							@endif	
							 name="quyen" value="2" type="radio">QT kinh doanh
						</label>
						<label class="radio-inline">
							<input
							@if($quantri->Quyen==3)
								{{'checked'}}
							@endif	
							 name="quyen" value="3" type="radio">QT danh mục
						</label>
					</div>
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default">Huỷ</button>
					<form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>


  @endsection