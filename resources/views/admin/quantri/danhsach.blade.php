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
            <div class="clearfix"></div>
			<!-- /.col-lg-12 -->
			@if(session('ThongBao'))
			<div class="alert alert-info">
				{{session('ThongBao')}}
			</div>
			@endif
			<div class="clearfix"></div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Email</th>
						<th>SoDienThoai</th>
						<th>HoTen</th>
						<th>Quyen</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($quantri as $qt)
					<tr class="odd gradeX" align="center">
						<td>{{$qt->id}}</td>
						<td>{{$qt->Email}}</td>
						<td>{{$qt->SoDienThoai}}</td>
						<td>{{$qt->HoTen}}</td>
						<td>
							<a  class="btn btn-xs btn-info">
							@if($qt->Quyen==1)
								{{'QTTaiKhoan'}}
							@elseif($qt->Quyen==2)
								{{'QTKinhDoanh'}}	
							@else
								{{'QTDanhMuc'}}
							@endif
						</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/quantri/sua/{{$qt->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a>Xoá</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

 @endsection