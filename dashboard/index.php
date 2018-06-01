<?php

  include 'template-parts/header.php';

  if (!$userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/login.php');
  }

  $current_page = "Dashboard";
  include 'template-parts/side-nav.php';
  include 'template-parts/top-nav.php';
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
                    
    <div class="col-md-12">
          <div class="card">
               
          </div>
        </div>
    </div>
</div>

<?php
  include 'template-parts/footer.php';
?>