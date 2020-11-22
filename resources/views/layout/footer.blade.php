<div class="footer-widget">
				<div class="container">
					<div class="footer-widget-wrap">
						<div class="row">
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Thông Tin</span></h3>
									<ul class="menu">
										<li><a href="#">Liên Hệ</a></li>
										<li><a href="#">Online Store</a></li>
										<li><a href="#">Tin Tức</a></li>
										<li><a href="#">Góp Ý</a></li>
										
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Chăm Sóc Khách Hàng</span></h3>
									<ul class="menu">
										<li><a href="#">Đăng Nhập</a></li>
										<li><a href="#">Đăng Ký</a></li>
										<li><a href="#">Giỏ Hàng</a></li>
										<li><a href="#">My WishList</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-widget-col col-md-2 col-sm-6">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title"><span>Quick Link</span></h3>
									<ul class="menu">
										<li><a href="#">Order Status</a></li>
										<li><a href="#">Shipping Policy</a></li>
										<li><a href="#">Return Policy</a></li>
										<li><a href="#">Digital Gift Card</a></li>
									</ul>
								</div>
							</div>
							
							<div class="footer-widget-col col-md-4 col-sm-6">
								<div class="widget widget_text">
									<h3 class="widget-title"><span>Apple store</span></h3>
									<div class="textwidget">
										<p><i class="fa fa-map-marker"></i>  68/12 Lê Hông Phong , Quận 10,TP.HCM, VN</p>
										<p><i class="fa fa-phone"></i> (+84) 812 288 979 </p>
										<p>
											<i class="fa fa-envelope"></i> <a href="mailto:email@gmail.com">nguyenhoainam.dtld@gmail.com</a>
										</p>
										
									</div>
								</div>

							</div>
							<div class="footer-widget-col col-md-4 col-sm-6">
								<div class="widget widget_text">
									<p class="payment"><img src="images/footer-payment-color.png" alt=""></p>
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		@include('frontend.subpage.dangnhap')
		@include('frontend.subpage.dangky')
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>