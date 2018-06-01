<?php
require 'config.php';
include 'template-parts/header.php';

?>


<div class="container">
  <h1 class="page-heading">Contact Us</h1>
  
  <div class="row">
    <div class="col-lg-3">
      
      <div class="contact card">
        <div class="card-body">
          <div class="icon">
            <i class="fas fa-phone"></i>  
          </div>
          <h5 class="card-text">Call us on</h5>
          <ul>
            <li>
              <a href="tel:<?php echo $siteinfo->info['contact_number1'] ?>">
                <?php echo $siteinfo->info['contact_number1'] ?>
              </a>
            </li>
            <li>
              <a href="tel:<?php echo $siteinfo->info['contact_number2'] ?>">
                <?php echo $siteinfo->info['contact_number2'] ?>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>


    <div class="col-lg-3">
      
      <div class="contact card">
        <div class="card-body">
          <div class="icon">
            <i class="fas fa-fax"></i>  
          </div>
          <h5 class="card-text">Fax us on</h5>
          <ul>
            <li>
              <?php echo $siteinfo->info['fax_number'] ?>
            </li>
          </ul>
        </div>
      </div>

    </div>


    <div class="col-lg-3">
      
      <div class="contact card">
        <div class="card-body">
          <div class="icon">
            <i class="fas fa-envelope"></i>  
          </div>
          <h5 class="card-text">Email us at</h5>
          <ul>
            <li>
              <a href="mailto:<?php echo $siteinfo->info['email'] ?>">
                <?php echo $siteinfo->info['email'] ?>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>


    <div class="col-lg-3">
      
      <div class="contact card">
        <div class="card-body">
          <div class="icon">
            <i class="fas fa-map-marker"></i>  
          </div>
          <h5 class="card-text">Come find us at</h5>
          <ul>
            <li>
              <?php echo $siteinfo->info['address'] ?>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13795.692847145348!2d71.5042848539673!3d30.18218741337425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5601489a1941851d!2sUnity+Home+Collections!5e0!3m2!1sen!2s!4v1526214575492" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>


</div>

<?php
include 'template-parts/footer.php';
?>

