		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 mx-auto">

						<ul class="list-inline text-center">
							<li class="list-inline-item">
								<a href="#">
								<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
								<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
								<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-github fa-stack-1x fa-inverse"></i>
								</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-5 mx-auto">
						<ul class="list-inline text-left">
							<li>
								Nhóm 2 
							</li>
							<li>
								Môn Thương mại điện tử
							</li>
							<li>
								<i class="fa fa-user-o blue" aria-hidden="true"></i> 
								Hoàng Văn Tuấn
							</li>
							<li>
								<i class="fa fa-user-o blue" aria-hidden="true"></i> 
								Lô Minh Đức
							</li>
							<li>
								<i class="fa fa-user-o blue" aria-hidden="true"></i> 
								Trần Tuấn Ngọc
							</li>
							<li>
								<i class="fa fa-user-o blue" aria-hidden="true"></i> 
								Ngô Nguyễn Chí Công
							</li>
							<li>
								<i class="fa fa-user-o blue" aria-hidden="true"></i> 
								Nguyễn Huy Hợp
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-5 mx-auto">
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-10 mx-auto">
						<p class="copyright text-muted">Copyright &copy; Nhóm 2 - Thương mại điện tử -  2018</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Bootstrap core JavaScript -->
		<script src="public/vendor/jquery/jquery.min.js"></script>
		<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Custom scripts for this template -->

		<?php
			if (!empty($validation)) {
				foreach ($validation as $js) {
					echo '<script src="' . $js . '"></script>';
				}
			}
		?>

		<script src="public/js/clean-blog.min.js"></script>
	</body>
</html>