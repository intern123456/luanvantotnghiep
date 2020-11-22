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
				<form action="admin/banner/sua/{{$banner->id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Tên</label>
						<input  class="form-control"  name="ten" value="{{$banner->Ten}}" placeholder="nhập tên banner " />
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<textarea id ="demo" class="form-control ckeditor"  name="noidung" />{{$banner->NoiDung}}</textarea>
					</div>
					<div class="form-group">
						<label>Hình</label>
						<input type="file" class="form-control" value="" name="hinh" placeholder="nhập hình ảnh " />
						<img width="200px" height="100px" src="images/banner/{{$banner->Hinh}}" alt="">
					</div>
					<div class="form-group">
						<label>Sản phẩm</label>
						<select class="form-control" name="sanpham" id="sanpham">
							@foreach($sanpham as $sp)
							<option 
							@if($sp->id==$banner->idSP)
							{{'selected'}}
							@endif
							value="{{$sp->id}}">{{$sp->Ten}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Quản trị</label>
						<select class="form-control" name="quantri" id="quantri">
							@foreach($quantri as $qt)
							<option 
							@if($qt->id==$banner->idQT)
							{{'selected'}}
							@endif
							value="{{$qt->id}}">{{$qt->HoTen}}-{{$qt->Quyen}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<label class="radio-inline">
							<input
							@if($banner->TrangThai==1)
							{{'checked'}}
							@endif
							 name="trangthai" value="1" checked="" type="radio">Hiện
						</label>
						<label class="radio-inline">
							<input 
							@if($banner->TrangThai==0)
							{{'checked'}}
							@endif
							name="trangthai" value="0" type="radio">Ẩn
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