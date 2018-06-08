
<?php
	include_once('app/init.php');
	include_once('views/_header.php');

	$posts = get_all_posts();
	//var_dump($posts);
?>

		<!-- Page Header -->
		<header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 mx-auto">
						<div class="site-heading">
							<h1>Nhóm 2</h1>
							<span class="subheading">A Blog Theme by Ngoc TT</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Main Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">

				<?php
					foreach ($posts as $post) { ?>

						<div class="post-preview">
							<a href="post.php?post-id=<?= $post['id'] ?>">
								<h2 class="post-title">
									<?= $post['title'] ?>
								</h2>
								<h3 class="post-subtitle">
									<?= $post['sub_title'] ?>
								</h3>
							</a>
							<p class="post-meta">Posted by
								<a href="#"><?= $post['fullname'] ?></a>
								on September 24, 2018
							</p>
						</div>
						<hr>

				<?php }

				?>


					
					

					<!-- Pager -->
					<div class="clearfix">
						<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
					</div>
				</div>
			</div>
		</div>
		<hr>


<?php
	include_once('views/_footer.php');
?>