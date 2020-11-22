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
						<th>Tên</th>
						<th>Hình</th>
						<th>Trạng thái</th>
						<th>Sản phẩm</th>
						<th>Quản trị</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($banner as $ban)
					<tr class="odd gradeX" align="center">
						<td>{{$ban->id}}</td>
						<td>{{$ban->Ten}}</td>
						<td><img width="200px" height="100px" src="images/banner/{{$ban->Hinh}}"></td>
						<td>
							<a class="btn btn-xs
							@if($ban->TrangThai==1)
							{{'btn-info'}}
							@else
							{{'btn-danger'}}
							@endif
							">
							@if($ban->TrangThai==1)
							{{'Hiển thị'}}
							@else
							{{'Ẩn'}}
							@endif
						</td>
						<td>
							{{$ban->quantri->HoTen}}
						</td>
						<td>
							{{$ban->sanpham->Ten}}
						</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/banner/sua/{{$ban->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/banner/xoa/{{$ban->id}}">Xoá</a></td>
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