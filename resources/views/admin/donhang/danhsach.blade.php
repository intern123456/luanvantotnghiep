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
                        <th>TongTien</th>
                        <th>Ghichu</th>
                        <th>Khachhang</th>
                        <th>Quantri</th>
                        <th>Trangthai</th>
                        <th>Delete</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donhang as $dh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$dh->id}}</td>
                        <td>{{number_format($dh->TongTien)}}</td>
                        <td>{{$dh->GhiChu}}</td>
                        <td>{{$dh->khachhang->HoTen}}</td>
                        <td>{{$dh->quantri->HoTen}}</td>
                        <td>
                           <a href="admin/donhang/xulydonhang/{{$dh->id}}" class="btn btn-xs 
                               @if($dh->TrangThai==0)
                               {{'btn-danger'}}
                               @elseif($dh->TrangThai==4)
                               {{'btn-danger'}}
                               @else
                               {{'btn-info'}}
                               @endif
                               ">
                               @if($dh->TrangThai==1)
                               {{'Xu Ly'}}
                               @elseif($dh->TrangThai==2)
                               {{'Dang giao hang'}}
                               @elseif($dh->TrangThai==3)
                               {{'Da giao hang'}}
                               @elseif($dh->TrangThai==4)
                               {{'Da huy'}}
                               @else
                               {{'Chua xu ly'}}
                               @endif

                           </a>
                       </td>
                       <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/donhang/xoa/{{$dh->id}}" > Delete</a></td>
                       <td>
                          <a class="view" data-key={{$dh->id}} >  
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Chi tiet hoa don #<b class="idhoadon" ></b></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body ">
              <table class="table table-striped table-bordered table-hover ketqua" id="dataTables-example">

              </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

      </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $(".view").click(function(){
            var id=$(this).attr("data-key");
            $("#myModal").modal('show');
            $(".idhoadon").text(id);
            $.get("admin/ajax/chitietdonhang/"+id,function(data){
                $(".ketqua").html(data);
                            // alert(data);
                        });
        });
    });
</script>
@endsection