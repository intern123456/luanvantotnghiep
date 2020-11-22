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
				<form action="admin/khuyenmai/sua/{{$khuyenmai->id}}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Tên</label>
						<input  class="form-control"  name="ten" value="{{$khuyenmai->Ten}}" placeholder="nhập tên " />
					</div>
					<div class="form-group">
						<label>NoiDung</label>
						<textarea id ="demo" class="form-control ckeditor"  name="noidung" />{{$khuyenmai->NoiDung}}</textarea>
					</div>
					<div class="form-group">
						<label>Ngày Kết Thúc</label>
						<input type="text" class="datepicker form-control" name="ngayketthuc" 
						{{-- value="{{$khuyenmai->NgayKetThuc}}" --}} placeholder="nhập ngày kết thúc " />
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<label class="radio-inline">
							<input
							@if($khuyenmai->TrangThai==1)
							{{'checked'}}
							@endif
							 name="trangthai" value="1" checked="" type="radio">Hiện
						</label>
						<label class="radio-inline">
							<input
							@if($khuyenmai->TrangThai==0)
							{{'checked'}}
							@endif
							 name="trangthai" value="0" type="radio">Ẩn
						</label>
					</div>
					<div class="form-group">
						<label>Quản trị</label>
						<select class="form-control" name="quantri" id="quantri">
							@foreach($quantri as $qt)
							<option
							@if($qt->id==$khuyenmai->idQT)
							{{'selected'}}
							@endif
							 value="{{$qt->id}}">{{$qt->HoTen}}-{{$qt->Quyen}}</option>
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
		@section('script')
		<script>
			$(document).ready(function(e) {   
				$('.datepicker').bootstrapMaterialDatePicker({
					format: 'D/M/Y', 
					weekStart: 1, time: false
				}); 
			});
		</script>

@endsection