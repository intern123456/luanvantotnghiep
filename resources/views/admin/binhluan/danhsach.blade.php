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
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>NoiDung</th>
						<th>TrangThai</th>
						<th>KhachHang</th>
						<th>SanPham</th>
						<th>QuanTri</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($binhluan as $bl)
					<tr class="odd gradeX" align="center">
						<td>{{$bl->id}}</td>
						<td>{{$bl->NoiDung}}</td>
						<td>
							<a class="btn btn-xs
							@if($bl->TrangThai==1)
							{{'btn-info'}}
							@else
							{{'btn-danger'}}
							@endif
							">
							@if($bl->TrangThai==1)
							{{"Hiển thị"}}
							@else
							{{'Ẩn'}}
							@endif
						</td>
						<td>{{$bl->khachhang->HoTen}}</td>
						<td>{{$bl->SanPham->Ten}}</td>
						<td>{{$bl->QuanTri->HoTen}}</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a > Sửa</a></td>
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