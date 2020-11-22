@extends('admin.layout.index')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">DANH SÁCH > SỬA</h4>

                <div class="col-lg-7" style="padding-bottom:120px">
				@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}
					<br>
					@endforeach
				</div>
				@endif
				<form action="admin/thuoctinh/them" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Sim</label>
						<input class="form-control" name="sim" placeholder="nhập số lượng sim" />
					</div>
					<div class="form-group">
						<label>Dung lượng</label>
						<input class="form-control" name="dungluong" placeholder="nhập dung lượng" />
					</div>
					<div class="form-group">
						<label>Màu sắc</label>
						<input class="form-control" name="mausac" placeholder="nhập màu sắc" />
					</div>
					<div class="form-group">
						<label>Ram</label>
						<input class="form-control" name="ram" placeholder="nhập ram" />
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