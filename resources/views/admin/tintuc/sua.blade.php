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
				<form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Tiêu đề</label>
						<input  class="form-control"  name="tieude" value="{{$tintuc->TieuDe}}" placeholder="nhập tiêu đề " />
					</div>
					<div class="form-group">
						<label>Nội dung</label>
						<textarea id ="demo" class="form-control ckeditor"  name="noidung" />{{$tintuc->NoiDung}}</textarea>
					</div>
					<div class="form-group">
						<label>Hình</label>
						<input type="file" class="form-control" value="" name="hinh" placeholder="nhập hình ảnh " />
						<img width="100px" height="100px" src="images/tintuc/{{$tintuc->Hinh}}">
					</div>
					<div class="form-group">
                                <label>Quản trị</label>
                                <select class="form-control" name="quantri" id="quantri">
                                     @foreach($quantri as $qt)
                                    <option 
									@if($qt->id==$tintuc->idQT)
                                        {{"selected"}}
                                    @endif
                                    value="{{$qt->id}}">{{$qt->HoTen}}</option>
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