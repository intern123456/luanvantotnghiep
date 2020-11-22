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
				<form action="admin/chitietthuoctinh/them" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Chi tiết</label>
						<input class="form-control" name="chitiet" placeholder="nhập chi tiết" />
					</div>
					<div class="form-group">
						<label>Sản phẩm</label>
						<select class="form-control" name="sanpham" id="quantri">
							@foreach($sanpham as $sp)
							<option value="{{$sp->id}}">{{$sp->Ten}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Thuộc Tính</label>
						<select class="form-control" name="thuoctinh" id="quantri">
							@foreach($thuoctinh as $tt)
							<option value="{{$tt->id}}">{{$tt->Sim}}-{{$tt->DungLuong}}-{{$tt->MauSac}}-{{$tt->Ram}}</option>
							@endforeach
						</select>
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