	</main>
	<footer>
		<div class="container">
			<div class="footer-container text-center">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-md footer-nav">
						<ul class="navbar-nav mx-auto">
							<?php foreach ($sitemenu->footer_menu as $single_menu): ?>
						    
							<li class="nav-item">
								<a class="nav-link" href="<?php echo $single_menu['menu_url']; ?>">
									<?php echo $single_menu['menu_name'] ?>
								</a>
							</li>
							
							<?php endforeach; ?>

						</ul>
						
						</nav>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="social-icons">
							<ul>
								<?php if (!empty($siteinfo->info['facebook_url'])): ?>
								<li class="facebook-link"><a href="<?php echo $siteinfo->info['facebook_url'] ?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php endif; ?>

								<?php if (!empty($siteinfo->info['twitter_username'])): ?>
								<li class="twitter-link"><a href="https://twitter.com/<?php echo $siteinfo->info['twitter_username'] ?>"><i class="fab fa-twitter"></i></a></li>
								<?php endif; ?>

								<?php if (!empty($siteinfo->info['instagram_username'])): ?>
								<li class="instagram-link"><a href="https://instagram.com/<?php echo $siteinfo->info['instagram_username'] ?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="copyrights">
							&copy Copyright 2018 
							<a href="<?php echo $siteinfo->info['site_url'] ?>"><?php echo $siteinfo->info['site_name'] ?>
							</a> - All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


</div>

<!-- Scripts -->
<script type="text/javascript" src="<?php echo $siteinfo->info['site_url'] ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="<?php echo $siteinfo->info['site_url'] ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $siteinfo->info['site_url'] ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>