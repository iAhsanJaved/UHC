<?php
require 'config.php';
include 'template-parts/header.php';

?>


<div class="container content-box">

  <div id="featured-products">
  <h1 class="page-heading">Products</h1>
  <div class="row">
    <div class="col-md">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/products/kitchen-towel.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text text-center">Title</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/products/kitchen-towel.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text text-center">Title</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/products/kitchen-towel.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text text-center">Title</h5>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/products/kitchen-towel.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-text text-center">Title</h5>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

</div>

<?php
include 'template-parts/footer.php';
?>

