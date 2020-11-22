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
				<form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Tên</label>
						<input  class="form-control"  name="ten" value="{{$sanpham->Ten}}" placeholder="nhập tên sản phẩm " />
					</div>
					<div class="form-group">
						<label>Tóm tắt</label>
						<textarea id ="demo" class="form-control ckeditor"  name="tomtat" />{{$sanpham->TomTat}}</textarea>
					</div>
					<div class="form-group">
						<label>Cấu hình</label>
						<textarea id ="demo" class="form-control ckeditor"  name="cauhinh" />{{$sanpham->CauHinh}}</textarea>
					</div>
					<div class="form-group">
						<label>Giá</label>
						<input  class="form-control" value="{{$sanpham->Gia}}"  name="gia" placeholder="nhập giá sản phẩm " />
					</div>
					<div class="form-group">
						<label>Số lượng</label>
						<input  class="form-control" value="{{$sanpham->SoLuong}}" name="soluong" placeholder="nhập số lượng sản phẩm " />
					</div>
					<div class="form-group">
						<label>Hình</label>
						<input type="file" class="form-control" value="" name="hinh" placeholder="nhập hình ảnh " />
						<img width="100px" height="100px" src="images/sanpham/{{$sanpham->Hinh}}" >
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<textarea id ="demo" class="form-control ckeditor"  name="noidung" />{{$sanpham->NoiDung}}</textarea>
					</div>
					<div class="form-group">
						<label>Bán chạy</label>
						<label class="radio-inline">
							<input
							@if($sanpham->BanChay==1)
							{{'checked'}}
							@endif
							 name="banchay" value="1" checked="" type="radio">có
						</label>
						<label class="radio-inline">
							<input
							@if($sanpham->BanChay==0)
							{{'checked'}}
							@endif
							name="banchay" value="0" type="radio">Không
						</label>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<label class="radio-inline">
							<input
							@if($sanpham->TrangThai==1)
							{{'checked'}}
							@endif
							 name="trangthai" value="1" checked="" type="radio">Hiện
						</label>
						<label class="radio-inline">
							<input 
							@if($sanpham->TrangThai==0)
							{{'checked'}}
							@endif
							name="trangthai" value="0" type="radio">Ẩn
						</label>
					</div>
					<div class="form-group">
						<label>Thể loại</label>
						<select class="form-control" name="theloai" id="quantri">
							@foreach($theloai as $tl)
							<option
							@if($sanpham->idTL==$tl->id)
							{{'selected'}}
							@endif
							 value="{{$tl->id}}">{{$tl->Ten}}</option>
							@endforeach
						</select>
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