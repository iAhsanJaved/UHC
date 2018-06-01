<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white">
						<a class="navbar-brand" href="<?php echo $siteinfo->info['site_url'] ?>">
						<?php if(!empty($siteinfo->info['main_logo'])): ?> 
						  	<img src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/logo/<?php echo $siteinfo->info['main_logo'] ?>" class="img-fluid main-logo" alt="Logo">
				 		<?php else: ?>
						  	<?php echo $siteinfo->info['site_name'] ?>
						<?php endif; ?>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
						    <ul class="navbar-nav ml-auto">
						    <?php foreach ($sitemenu->header_menu as $single_menu):?>
						    	<li class="nav-item">
						        	<a class="nav-link" href="<?php echo $single_menu['menu_url']; ?>"><?php echo $single_menu['menu_name'] ?><span class="sr-only">(current)</span></a>
						      	</li>	
						    <?php endforeach; ?>
						      
						    </ul>
						</div>
					</nav>
				</div>
			</div>			
		</div>
	
	</header>