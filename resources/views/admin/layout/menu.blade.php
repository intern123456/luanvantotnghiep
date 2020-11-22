          
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assetsd/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        @if(Auth::check())
                        <h5><a href="#">{{Auth::user()->name}}</a> </h5>
                        <ul class="list-inline">
                            
                        

                            <li class="list-inline-item">
                                <a href="logout" class="text-custom">
                                    Đăng Xuất<i class="mdi mdi-power"></i>
                                </a>
                            </li>
                            
                        </ul>

                        @endif
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                     

                         

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Thể Loại </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/theloai/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/theloai/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Thuộc Tính </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/thuoctinh/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/thuoctinh/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Sản Phẩm </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/sanpham/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/sanpham/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Ảnh Slide Sản Phẩm </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/anhslidesanpham/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/anhslidesanpham/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Tin Tức </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/tintuc/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/tintuc/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Banner </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/banner/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/banner/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Khuyến Mãi </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/khuyenmai/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/khuyenmai/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Đơn Hàng </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/donhang/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/donhang/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Bình Luận </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/binhluan/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/binhluan/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span> Quản Trị </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/quantri/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/quantri/them">Thêm </a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right"></span><span>User </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/user/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/user/them">Thêm </a></li>
                                   
                                </ul>
                            </li>

                           

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->