<div class="topbar">

    @if(Session::has('flag'))
        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif

    <div class="container topbar-wap">
        <div class="row">
            <div class="col-sm-6">
                <div class="left-topbar">
                    <div class="topbar-social">
                        <a href="#" title="Facebook" target="_blank">
                            <i class="fa fa-facebook facebook-bg-hover"></i>
                        </a>
                        <a href="#" title="Twitter" target="_blank">
                            <i class="fa fa-twitter twitter-bg-hover"></i>
                        </a>
                        <a href="#" title="Google+" target="_blank">
                            <i class="fa fa-google-plus google-plus-bg-hover"></i>
                        </a>

                        <a href="#" title="Instagram" target="_blank">
                            <i class="fa fa-instagram instagram-bg-hover"></i>
                        </a>
                        <!-- <a > Liện Hệ Ngay Với Chúng Tôi Theo : 0812-288-979
                        </a> -->
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="right-topbar">
                    <div class="user-wishlist">
                        <a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a>
                    </div>
                    <div class="user-login">
                        <ul class="nav top-nav">

                            @if(Auth::check())

                                <li class="menu-item">
                                    <a href="logout"><i class="fa fa-user"></i>{{Auth::user()->name}}|Đăng Xuất</a>
                                </li>

                            @else
                                <li class="menu-item">
                                    <a data-rel="loginModal" href="dangnhap"><i class="fa fa-user"></i> Đăng Nhập</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="language-switcher">
                        <div class="wpml-languages disabled">
                            <a class="active" href="#" data-toggle="dropdown">
                                <img src="images/23px-Flag_of_Vietnam.jpg" alt="English"/> VN
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


