<div class="navbar-default-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 navbar-default-col">
                <div class="navbar-wrap">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar-top"></span>
                            <span class="icon-bar bar-middle"></span>
                            <span class="icon-bar bar-bottom"></span>
                        </button>
                        <a class="navbar-search-button search-icon-mobile" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                        <a class="cart-icon-mobile" href="/">
                            <i class="elegant_icon_bag"></i><span>0</span>
                        </a>
                        <a class="navbar-brand" href="#">
                            <img class="logo" alt="The DMCS" src="images/apple.png">
                            <img class="logo-fixed" alt="The DMCS" src="images/logo-fixed.png">
                            <img class="logo-mobile" alt="The DMCS" src="images/logo-mobile.png">
                        </a>
                    </div>
                    <nav class="collapse navbar-collapse primary-navbar-collapse">
                        <ul class="nav navbar-nav primary-nav">
                            <li class="menu-item-has-children dropdown">
                                <a href="/" class="dropdown-hover">
                                    <span class="underline">Trang Chủ</span> <span class="caret"></span>
                                </a>

                            </li>
                            <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                <a href="sanpham" class="dropdown-hover">
                                    <span class="underline">IPHONE</span> <span class="caret"></span>
                                </a>

                            </li>
                            <li><a href="sanpham"><span class="underline">IPAD</span></a></li>
                            <li class="menu-item-has-children dropdown">
                                <a href="sanpham" class="dropdown-hover">
                                    <span class="underline">MACBOOK</span> <span class="caret"></span>
                                </a>

                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="sanpham" class="dropdown-hover">
                                    <span class="underline">APPLE WATCH</span> <span class="caret"></span>
                                </a>

                            </li>
                            <li class="navbar-search">
                                <a class="navbar-search-button" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li class="navbar-minicart navbar-minicart-nav">
                                <a class="minicart-link" href="giohang">
															<span class="minicart-icon">
																<i class="minicart-icon-svg elegant_icon_bag"></i>
																<span>{{Cart::count()}}</span>
															</span>
                                </a>
                                <div class="minicart">
                                    @if(Cart::count() <= 0)
                                        <div class="minicart-header no-items show">
                                            Bạn chưa có sản phẩm nào.
                                        </div>
                                    @else
                                        @php
                                            $carts = \Cart::content();
                                        @endphp
                                        @foreach($carts as $cart)
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-3">
                                                        <img src="images/sanpham/{{$cart->options->hinh}}"/>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-5">
                                                        <div style="font-size: 10px">{{$cart->name}}</div>
                                                        <div style="font-size: 10px">Số lượng:{{$cart->qty}}</div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 text-right">
                                                        <h6>{{number_format($cart->qty*$cart->price)}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="minicart-footer">
                                        <div class="minicart-actions clearfix">
                                            <a class="button" href="/">
                                                <span class="text">Tiếp Tục Mua hàng</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-search-overlay hide">
    <div class="container">
        <div class="header-search-overlay-wrap">
            <form class="searchform">
                <input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
                <input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
            </form>
            <button type="button" class="close">
                <span aria-hidden="true" class="fa fa-times"></span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    </div>
</div>


