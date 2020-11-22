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
						<th>Chi tiết</th>
						<th>Sản phẩm</th>
						<th>Thuộc tính</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chitiettt as $cttt)
					<tr class="odd gradeX" align="center">
						<td>{{$cttt->id}}</td>
						<td>{{$cttt->ChiTiet}}</td>
						<td>{{$cttt->sanpham->Ten}}</td>
						<td>
							{{$cttt->thuoctinh->Sim}}<br>
							{{$cttt->thuoctinh->DungLuong}}<br>
							{{$cttt->thuoctinh->MauSac}}<br>
							{{$cttt->thuoctinh->Ram}}<br>
						</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/chitietthuoctinh/sua/{{$cttt->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/thechitietthuoctinhloai/xoa/{{$cttt->id}}">Xoá</a></td>
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