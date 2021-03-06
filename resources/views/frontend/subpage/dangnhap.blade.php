
<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm" action="dangnhap" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}" >
                        
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Đăng Nhập</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="email" required class="form-control" value="" placeholder="Email">
							</div>
							
							<div class="form-group">
								<label for="user_password">Mật khẩu</label>
								<input type="password" id="user_password" required value="" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Đăng Ký</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Đăng Nhập</button>
						</div>
					</form>
				</div>
			</div>
		</div>