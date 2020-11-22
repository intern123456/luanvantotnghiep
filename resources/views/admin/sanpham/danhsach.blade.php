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
						<th>Nội dung</th>
						<th>Tóm tắt </th>
						<th>Trạng thái</th>
						<th>Thể loại</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sanpham as $sp)
					<tr class="odd gradeX" align="center">
						<td>{{$sp->id}}</td>
						<td>
							{{$sp->Ten}}<br>
							<img width="100px" height="100px" src="images/sanpham/{{$sp->Hinh}}" ><br>
							Gia:{{$sp->Gia}}<br>
							Soluong:{{$sp->SoLuong}}
						</td>
						<td>{{$sp->TomTat}}</td>
						<td>
							<a class="btn btn-xs
							@if($sp->TrangThai==1)
							{{'btn-info'}}
							@else
							{{'btn-danger'}}
							@endif
							">
							@if($sp->TrangThai==1)
							{{"Hiển thị"}}
							@else
							{{"Ẩn"}}
							@endif
						</td>
						<td>
							{{$sp->theloai->Ten}}
						</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/sanpham/sua/{{$sp->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/sanpham/xoa/{{$sp->id}}">Xoá</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>




@endsection