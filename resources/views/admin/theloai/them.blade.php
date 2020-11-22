@extends('admin.layout.index')
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">DANH SÁCH > THÊM</h4>

                        <div class="col-lg-7" style="padding-bottom:120px">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}
                                        <br>
                                    @endforeach
                                </div>
                            @endif
                            <form action="admin/theloai/them" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Tên thể loại</label>
                                    <input class="form-control" name="ten" placeholder="nhập tên thể loại"/>
                                </div>
                                <div class="form-group">
                                    <label>Trang chủ</label>
                                    <label class="radio-inline">
                                        <input name="trangchu" value="1" checked="" type="radio">Hiển thị
                                    </label>
                                    <label class="radio-inline">
                                        <input name="trangchu" value="0" type="radio">Không hiển thị
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <label class="radio-inline">
                                        <input name="trangthai" value="1" checked="" type="radio">Hiện
                                    </label>
                                    <label class="radio-inline">
                                        <input name="trangthai" value="0" type="radio">Ẩn
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Thêm</button>
                                <button type="reset" class="btn btn-default">Huỷ</button>
                                </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            </div> <!-- content -->

            <footer class="footer text-right">
                2019 2020 Admin Nguyenhoainam.dtld@gmail.com
            </footer>
        </div>

@endsection
