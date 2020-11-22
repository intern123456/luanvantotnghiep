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
				<form action="admin/donhang/xulydonhang/{{$donhang->id}}" method="POST" >
					{{ csrf_field() }}
					<div class="form-group">
						<label>TongTien</label>
						<input  class="form-control" disabled="true"  name="tongtien" value="{{$donhang->TongTien}}" />
					</div>
					<div class="form-group">
						<label>GhiChu</label>
						<textarea name="ghichi" class="form-control" disabled="true" id="" cols="30" rows="10">{{$donhang->GhiChu}}</textarea>
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<select class="form-control" name="trangthai" id="trangthai">
							{{-- don hang bang 0 --}}
							@if($donhang->TrangThai==0)
							{{--kt don hang bang 0 --}}
								<option 
								@if($donhang->TrangThai==0)
								{{'selected'}}
								@endif
								value="0">Chưa xử lý</option>
								<option
								@if($donhang->TrangThai==1)
								{{'selected'}}
								@endif
								value="1">Đã xử lý</option>
								<option 
								@if($donhang->TrangThai==2)
								{{'selected'}}
								@endif
								value="2">Đang giao hàng</option>
								<option 
								@if($donhang->TrangThai==3)
								{{'selected'}}
								@endif
								value="3">Đã giao hàng</option>
								<option
								@if($donhang->TrangThai==4)
								{{'selected'}}
								@endif
								value="4">Huỷ</option>
							{{-- don hang bang 1 --}}
							@elseif($donhang->TrangThai==1)
							{{-- kt don hang bang 1 --}}
								<option
								@if($donhang->TrangThai==1)
								{{'selected'}}
								@endif
								value="1">Đã xử lý</option>
								<option 
								@if($donhang->TrangThai==2)
								{{'selected'}}
								@endif
								value="2">Đang giao hàng</option>
								<option 
								@if($donhang->TrangThai==3)
								{{'selected'}}
								@endif
								value="3">Đã giao hàng</option>
							{{-- don hang bang 2 --}}
							@elseif($donhang->TrangThai==2)
							{{-- kt don hang bang 2 --}}
								<option
								@if($donhang->TrangThai==2)
								{{'selected'}}
								@endif
								value="2">Đang giao hàng</option>
								<option 
								@if($donhang->TrangThai==3)
								{{'selected'}}
								@endif
								value="3">Đã giao hàng</option>
							{{-- don hang bang 3 --}}
							@elseif($donhang->TrangThai==3)
							{{-- kt don hang bang 3 --}}
								<option
								@if($donhang->TrangThai==3)
								{{'selected'}}
								@endif
								value="3">Đã giao hàng</option>
							{{-- don hang bang 4 --}}
							@elseif($donhang->TrangThai==4)
							{{-- kt don hang bang 4 --}}
								<option
								@if($donhang->TrangThai==4)
								{{'selected'}}
								@endif
								value="4">Huỷ</option>

							@endif
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