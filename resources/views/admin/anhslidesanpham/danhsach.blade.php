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
						<th>Ảnh trên</th>
						<th>Ảnh dưới</th>
						<th>Sản Phẩm</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($anhslidesp as $slsp)
					<tr class="odd gradeX" align="center">
						<td>{{$slsp->id}}</td>
						<td><img width="100px" height="100px" src="images/anhslidesp/{{$slsp->AnhTren}}"></td>
						<td><img width="100px" height="100px" src="images/anhslidesp/{{$slsp->AnhDuoi}}"></td>
						<td>{{$slsp->sanpham->Ten}}</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/anhslidesanpham/sua/{{$slsp->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/anhslidesanpham/xoa/{{$slsp->id}}">Xoá</a></td>
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