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
				<form action="admin/donhang/xuly/{{$ctdh->id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Ten</label>
						<input  class="form-control" disabled="true"  name="soluong" value="{{$ctdh->sanpham->Ten}}" />
					</div>
					<div class="form-group">
						<label>Soluong</label>
						<input  class="form-control" disabled="true"  name="soluong" value="{{$ctdh->SoLuong}}" />
					</div>
					<div class="form-group">
						<label>Gia</label>
						<input  class="form-control" disabled="true" name="gia" value="{{$ctdh->Gia}}" />
					</div>
					<div class="form-group">
						<label>Hinh</label>
						<input  class="form-control" disabled="true" name="gia" value="{{$ctdh->sanpham->Hinh}}" />
						<img width="100px" height="100px" src="upload/sanpham/{{$ctdh->sanpham->Hinh}}" alt="">
					</div>
					<div class="form-group">
						<label>IMEI</label>
						<input  class="form-control"  name="imei" value="{{$ctdh->IMEI}}" />
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