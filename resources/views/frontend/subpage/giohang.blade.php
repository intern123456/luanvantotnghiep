
@extends('frontend.index')
@section('content')

<div class="heading-container heading-resize heading-button">
				<div class="heading-background heading-parallax bg-3">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-wrap">
									<div class="page-title">
										<h1>Product by Category</h1>
										<span class="subtitle">Women</span>
										<a class="btn btn-white-outline heading-button-btn" href="#" title="Buy Now">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<section class="flat-row main-shop shop-4col">
  <div class="container">
    <div class="row">
{{--       @include('frontend.subpage.boloc')--}}
      @if(session('ThongBao'))
        <div class="alert alert-success">
          {{session('ThongBao')}}
        </div>
      @endif
      <div class="product-content product-fourcolumn clearfix">


        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Hình</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Tổng Tiền</th>
                <th scope="col">Quản Lý</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt=1; $sum=0; ?>
              @foreach($sanpham as $key=> $sp)

              <tr>
                <td>{{$stt}}</td>
                <td>{{$sp->name}}</td>
                <td>
                  <img width="100px" height="100px" src="images/sanpham/{{$sp->options->hinh}}" alt="">
                </td>
                <td><input class="soluong" type="number" name="soluong" value="{{$sp->qty}}" min=0 style="width: 50px">
                <input type="hidden" name="idsp" class="idsp"  value="{{$sp->id}}" >
                </td>
                <td>{{number_format($sp->price)}}</td>
                <td class="tien">{{number_format(($sp->price*$sp->qty))}}</td>
                <td >
                  <i class="fa fa-pencil  fa-fw " ></i><a class="updatecart" data-key={{$key}}> Sửa</a>-
                  <i class="fa fa-trash-o fa-fw"></i> <a href="xoagiohang/{{$key}}">Xoá</a>
                </td>
              </tr>
              <?php $stt++;$sum+=$sp->price*$sp->qty?>
              @endforeach
            </tbody>
          </table>
          <div  style="float: right;" class="col-md-4 pull-right " >
              <table class="table">
                  <thead >
                  <tr   >
                      <th colspan="2" scope="col" class="text-center" style="font-size: large;">Thông Tin Đơn Hàng</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th scope="row" style="font-size: large;">Số Tiền:</th>
                      <td class="text-danger" style="font-size: large;">{{number_format($sum)}}</td>

                  </tr>
                  <tr>
                      <th scope="row" style="font-size: large;">Tổng tiền thanh toán</th>
                      <td class="text-danger" style="font-size: large;">{{number_format($sum)}}</td>

                  </tr>
                  <tr class="text-center">
                      <td colspan="2">
                          <a style="margin-right: 5px; margin-top: 10px; font-size: medium;" href="/" class="btn btn-danger" >Tiếp Tục Mua Hàng</a>
                          <a href="shopping/donhang" class="btn btn-danger" style="margin-top: 10px; font-size: medium;">Thanh Toán</a>
                      </td>
                  </tr>
                  </tbody>
              </table>
              </div>
            </div>
          </div><!-- /.product-content -->
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.flat-row -->
  @endsection
@section('script')
   <script>
      $(document).ready(function(){
         $(".updatecart").click(function(){
            var soluong=$(this).parents("tr").find(".soluong").val();
            var idcart=$(this).attr("data-key");
            var idsp=$(this).parents("tr").find(".idsp").val();
            // alert(soluong);
            $.get("suagiohang/"+idcart+"/"+soluong+"/"+idsp+"/",function(data){
              $(".tien").append(data);
               if(data==1){
                  alert("cap nhap thanh cong");
                   location.reload();
                 }else{
                    alert("cap nhap that bai");
                   location.reload();
                 }
            });
         });
      });
   </script>
@endsection
