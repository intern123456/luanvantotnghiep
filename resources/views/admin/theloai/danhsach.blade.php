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
                        <th>TrangChu</th>
                        <th>TrangThai</th>
                        <th>Xoá</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($theloai as $tl)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tl->id}}</td>
                        <td>{{$tl->Ten}}</td>
                        <td>
                            <a  href="admin/theloai/xuly/{{$tl->id}}" class="btn btn-xs 
                            @if($tl->TrangChu==1) 
                                {{'btn-info'}}
                            @else
                                {{'btn-danger'}}
                            @endif;         
                        ">
                            @if($tl->TrangChu==1)
                                {{'Hiển thị'}}
                            @else
                                {{'Không hiển thị'}}    
                            @endif
                        </td>
                        <td>
                            <a  class="btn btn-xs 
                            @if($tl->TrangThai==1) 
                                {{'btn-info'}}
                            @else
                                {{'btn-danger'}}
                            @endif;         
                        ">
                            @if($tl->TrangThai==1)
                                {{'Hiện'}}
                            @else
                                {{'Ẩn'}}    
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/theloai/sua/{{$tl->id}}"> Sửa</a></td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/theloai/xoa/{{$tl->id}}">Xoá</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
                <footer class="footer text-right">
                    2019 - 2020  Admin Nguyenhoainam.dtld@gmail.com
                </footer>

            </div>
@endsection