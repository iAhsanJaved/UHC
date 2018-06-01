<div id="top-header"> 
		<div class="container-fluid d-none d-lg-block">
			<div class="row">
				<div class="col-md-8 contact-info">
					<ul>
						<?php if (!empty($siteinfo->info['contact_number1'])): ?>
						<li><a href="tel:<?php echo $siteinfo->info['contact_number1'] ?>"><i class="fas fa-phone"></i> <?php echo $siteinfo->info['contact_number1'] ?></a>
						</li>
						<?php endif; ?>

						<?php if (!empty($siteinfo->info['email'])): ?>
						<li><a href="mailto:<?php echo $siteinfo->info['email'] ?>"><i class="fas fa-envelope"></i> <?php echo $siteinfo->info['email'] ?></a>
						</li>
						<?php endif; ?>
						
						<?php if (!empty($siteinfo->info['timing'])): ?>
						<li><i class="fas fa-clock"></i> <?php echo $siteinfo->info['timing'] ?>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="col-md-4 follow-on text-right">
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
	</div>