<?php
require 'config.php';
include 'template-parts/header.php';



/*
include 'SitePost.php';

$sitepost = new SitePost($conn->getConnection()); 
$sitepost->fetchPosts();
foreach ($sitepost->posts as $post) {
?>

<div class="card mb-3">
  <img class="card-img-top" src="./assets/img/posts/<?php echo $post['post_img']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $post['post_title']?></h5>
    <p class="card-text"><?php echo $post['post_content']?></p>
  </div>
</div>

<?php
}

*/
?>

<?php include 'template-parts/content/slider.php'; ?>
<div id="tagline" class="text-center">
	<h2><?php echo $siteinfo->info['tagline'] ?></h2>
</div>
<div id="intro-container" class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h2>Unity Home Collections</h2>
    <p class="lead">Unity Home Collection Textile is the leading manufacturer and exporter of different quality terry products, all sort of textiles made up items in Pakistan.</p>
  </div>
</div>


<?php
include 'template-parts/content/featured-products.php';
include 'template-parts/footer.php';
?>

