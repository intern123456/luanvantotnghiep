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
						<th>Ten</th>
						<th>NoiDung</th>
						<th>NgayKetThuc</th>
						<th>TrangThai</th>
						<th>QuanTri</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($khuyenmai as $km)
					<tr class="odd gradeX" align="center">
						<td>{{$km->id}}</td>
						<td>{{$km->Ten}}</td>
						<td>{{$km->NoiDung}}</td>
						<td>{{$km->NgayKetThuc}}</td>
						<td>
							<a class="btn btn-xs
							@if($km->TrangThai==1)
							{{'btn-info'}}
							@else
							{{'btn-danger'}}
							@endif
							">
							@if($km->TrangThai==1)
							{{"Hiển thị"}}
							@else
							{{'Ẩn'}}
							@endif
						</td>
						<td>{{$km->QuanTri->HoTen}}</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/khuyenmai/sua/{{$km->id}}" > Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/khuyenmai/xoa/{{$km->id}}" onclick="return confirm('Ban co muon xoa khong?')";>Xoá</a></td>
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