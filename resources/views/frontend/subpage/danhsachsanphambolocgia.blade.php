@extends("frontend.index")
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">APPLE</h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">TRANG CHỦ</a></li>
                        
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->
<section class="flat-row main-shop shop-4col">
    <div class="container">
        <div class="row">
           @include('frontend.subpage.boloc')
            <div class="product-content product-fourcolumn clearfix">
                <ul class="product style2">
                    @foreach($sanpham as $sp)
                    <li class="product-item">
                        <div class="product-thumb clearfix">
                            <a href="chitietsanpham/{{$sp->id}}/{{$sp->Ten_KhongDau}}.html">
                                <img src="upload/sanpham/{{$sp->Hinh}}" alt="image">
                            </a>
                        </div>
                        <div class="product-info clearfix">
                            <span class="product-title">{{$sp->Ten}}</span><br>
                            {{-- <span class="product-title">{{$tt->DungLuong}}</span> --}}
                            <div class="price">
                                <ins>
                                    <span class="amount">{{formatPrice($sp->Gia)}}</span>
                                </ins>
                            </div>
                        </div>
                        <div class="add-to-cart text-center">
                            <a href="themgiohang/{{$sp->id}}">Thêm giỏ hàng</a>
                        </div>
                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                    </li>
                    @endforeach
                </ul><!-- /.product -->
            </div><!-- /.product-content -->
            <br>
            <div class="product-pagination text-center margin-top-11 clearfix pull-right">
                       

           </div>
           {{-- <div class="col-md-3 offset-md-5">{{$sanpham->links()}}</div> --}}
       </div><!-- /.col-md-12 -->
   </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.flat-row -->
@endsection
