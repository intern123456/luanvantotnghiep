@extends('admin.layout.index')
@section('content')
		<div class="content-page">
		                <!-- Start content -->
		                <div class="content">
		                
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">DANH SÁCH > SỬA</h4>
					
					<!-- /.col-lg-12 -->
								<div class="col-lg-7" style="padding-bottom:120px">
									@if(count($errors)>0)
									<div class="alert alert-danger">
										@foreach($errors->all() as $err)
										{{$err}}
										<br>
										@endforeach
									</div>
									@endif
									<form action="admin/theloai/sua/{{$theloai->id}}" method="POST">
										{{ csrf_field() }}
										<div class="form-group">
											<label>Tên thể loại</label>
											<input class="form-control" value="{{$theloai->Ten}}" name="ten" placeholder="nhập tên thể loại" />
										</div>
										<div class="form-group">
											<label>Trang chủ</label>
											<label class="radio-inline">
												<input
												@if($theloai->TrangChu==1)
													{{'checked'}}
												@endif	
												 name="trangchu" value="1" checked="" type="radio">Hiển thị
											</label>
											<label class="radio-inline">
												<input
												@if($theloai->TrangChu==0)
													{{'checked'}}
												@endif	
												 name="trangchu" value="0" type="radio">Không hiển thị
											</label>
										</div>
										<div class="form-group">
											<label>Trạng thái</label>
											<label class="radio-inline">
												<input 
												@if($theloai->TrangThai==1)
													{{'checked'}}
												@endif	
												name="trangthai" value="1" checked="" type="radio">Hiện
											</label>
											<label class="radio-inline">
												<input
												@if($theloai->TrangThai==0)
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