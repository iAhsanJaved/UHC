<?php
  include  './SiteSlide.php';  
  $siteslide = new SiteSlide($conn->getConnection());

?>
<?php if (!empty($siteslide->site_slides)) : ?>
<div id="carouselSliderControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <?php 
      $arrSize = sizeof($siteslide->site_slides);
      for ($i=0; $i<$arrSize; $i++):?>
    
    <div class="carousel-item <?php echo $i == 0 ? "active" : "" ?>">
      <img class="d-block img-fluid" src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/slider-img/<?php echo $siteslide->site_slides[$i]['slide_img']; ?>">
    </div>
    
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselSliderControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselSliderControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif; ?>