@extends("frontend.index")
@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Tin tức</h1>
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

<!-- Blog posts -->
<section class="blog-posts blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="post-wrap detail">

                    <article class="post clearfix">
                        <div class="title-post">
                            <h2><a href="blog-detail.html">{{$tintuc->TieuDe}}</a></h2>
                        </div><!-- /.title-post -->
                        <div class="content-post">
                            <ul class="meta-post">
                                <li class="author padding-left-2">
                                    <span>Người đăng:</span><a >{{$tintuc->quantri->HoTen}}</a>
                                </li>
                                <li class="comment">
                                    <a href="#">10 Comment</a>
                                </li>
                                <li class="date">
                                    <span>Thời gian: {{date( 'd/m/Y', strtotime($tintuc->created_at) )}} </span>
                                </li>
                            </ul><!-- /.meta-post -->
                            {!!$tintuc->NoiDung!!}
                        </div><!-- /.content-post -->
                        <div class="direction">
                            <ul class="tags-share clearfix">
                                <li class="float-left">
                                    <div class="tags">
                                        <span>Tags:</span><a href="#">Decoration</a>,
                                        <a href="#">Fashion</a>, <a href="#">Bags</a>
                                    </div><!-- /.tags -->
                                </li>
                                <li class="float-right">
                                   <div class="social-icon">
                                    <ul class="social-list">
                                        <li class="share">Share:</li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div><!-- /.social-icon --> 
                            </li>
                        </ul>
                    </div><!-- /.direction -->
                </article><!-- /.post -->

            </div><!-- /.post-wrap -->

            <div class="main-single">

                <div class="comments-area">
                    <ol class="comment-list">
                        <li class="comment">
                            <article class="comment-body">                                        
                                <div class="comment-author">
                                    <img src="images/blog/comment1.png" alt="image">  
                                </div><!-- .comment-author -->
                                <div class="comment-text">
                                    <div class="comment-metadata clearfix">
                                        <h5><a href="#">Jennifer Aniston</a></h5>                
                                        <span class="date">October 19,2018</span>                   
                                    </div><!-- .comment-metadata -->
                                    <div class="comment-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything barrassing hidden in the middle of text. </p>
                                    </div><!-- .comment-content -->

                                    <div class="reply">
                                        <a href="#" class="comment-like-link"><i class="fa fa-thumbs-up"></i>108</a>
                                        <a href="#" class="comment-reply-link"><i class="fa fa-pencil-square-o"></i>Reply</a>
                                    </div>
                                    <ol class="children">
                                        <li class="comment style1" id="comment-2">
                                            <article class="comment-body" id="div-comment-2">
                                                <div class="comment-author">
                                                    <img src="images/blog/comment1-1.png" alt="image">
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                   <div class="comment-metadata clearfix">
                                                    <h5><a href="#">John Smith</a></h5>                
                                                    <span class="date">October 19,2018</span>                   
                                                </div><!-- .comment-metadata -->
                                                <div class="comment-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised words which don't look even slightly believable...</p>
                                                </div><!-- .comment-content -->

                                                <div class="reply">
                                                    <a href="#" class="comment-like-link"><i class="fa fa-thumbs-up"></i>108</a>
                                                    <a href="#" class="comment-reply-link"><i class="fa fa-pencil-square-o"></i>Reply</a>
                                                </div>
                                            </div><!-- /.comment-text -->
                                        </article><!-- .comment-body -->
                                        
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </div><!-- /.comment-text -->                                       
                        </article><!-- .comment-body -->
                        
                    </li><!-- #comment-## -->
                    <li class="comment">
                        <article class="comment-body">                                        
                            <div class="comment-author">
                                <img src="images/blog/comment2.png" alt="image">  
                            </div><!-- .comment-author -->
                            <div class="comment-text">
                                <div class="comment-metadata clearfix">
                                    <h5><a href="#">Wiliam Chrisper</a></h5>                
                                    <span class="date">October 19,2018</span>                   
                                </div><!-- .comment-metadata -->
                                <div class="comment-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything barrassing hidden in the middle of text. </p>
                                </div><!-- .comment-content -->

                                <div class="reply">
                                    <a href="#" class="comment-like-link"><i class="fa fa-thumbs-up"></i>108</a>
                                    <a href="#" class="comment-reply-link"><i class="fa fa-pencil-square-o"></i>Reply</a>
                                </div>
                            </div><!-- /.comment-text -->                                       
                        </article><!-- .comment-body -->
                        
                    </li><!-- #comment-## -->                                     
                </ol><!-- .comment-list -->

                <div class="comment-respond" id="respond">
                    <div class="comment-reply-title">
                        <h5>Bình luận</h5>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                        <p class="comment-form-comment">
                            <label>Review*</label>
                            <textarea class="" tabindex="4"  name="comment" required></textarea>                                      
                        </p>
                        <p class="comment-name">
                            <label>Name*</label>                                  
                            <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                        </p>
                        <p class="comment-email"> 
                            <label>Email*</label>                                       
                            <input type="email" size="30" value="" name="email" id="email">
                        </p>
                        <p class="comment-form-notify clearfix">
                            <input type="checkbox" name="check-notify" id="check-notify"> <label for="check-notify">Notify me of new posts by email</label>
                        </p>                                                        
                        <p class="form-submit">                 
                            <button class="comment-submit">Submit</button>
                        </p>
                    </form>
                </div><!-- /.comment-respond -->
            </div><!-- /.comments-area -->
        </div><!-- /.main-single -->    
    </div><!-- /.col-md-9 -->
    <div class="col-md-3">
        <div class="sidebar">
            <div class="widget widget_categories">
                <h5 class="widget-title">Thể Loại</h5>
                <ul>
                    @foreach($theloai as $tl)
                    <li><a href="danhmucsanpham/{{$tl->id}}/{{$tl->Ten_KhongDau}}.html">{{$tl->Ten}}</a></li>
                    @endforeach
                </ul>
            </div><!-- /.widget-categories -->
            
            <div class="widget widget-news-latest">
                <h5 class="widget-title">Tin Mới</h5>
                <ul class="popular-news clearfix">
                    @foreach($tinmoi as $tm)
                    <li>                                      
                        <h6>
                            <a href="chitiettintuc/{{$tm->id}}/{{$tm->TieuDe_KhongDau}}.html">{{$tm->TieuDe}}</a>
                        </h6> 
                        <a class="post_meta">{{date( 'd/m/Y', strtotime($tm->created_at) )}}</a>
                    </li>
                    @endforeach
                </ul><!-- /.popular-news -->
            </div><!-- /.widget-news-latest -->

            <div class="widget widget_tag">
                <h5 class="widget-title">Popular Tags</h5>
                <div class="tag-list">
                    <a href="#">All products</a>
                    <a href="#" class="active">Bags</a>
                    <a href="#">Chair</a>
                    <a href="#">Decoration</a>
                    <a href="#">Fashion</a> 
                    <a href="#">Tie</a>
                    <a href="#">Furniture</a>
                    <a href="#">Accesories</a>     
                </div>
            </div><!-- /.widget-tag -->
        </div><!-- /.sidebar -->
    </div><!-- /.col-md-3 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.blog posts -->

@endsection