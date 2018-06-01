<?php

include 'template-parts/header.php';

  if (!$userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/login.php');
  }

$current_page = "Settings";
include 'template-parts/side-nav.php';
include 'template-parts/top-nav.php';

if (isset($_POST['submit'])) {
  $changed_info = array_diff($_POST,$siteinfo->info);

  foreach ($changed_info as $info_title => $info_value) {
    if ($info_title != 'submit') {
        $siteinfo->updateInfo($info_title, $info_value);
    }
  }

    $siteinfo->fetchInfo();


}

?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">

    <div class="col-md-12">
      
      <div class="card">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
          <div class="card-header">
            <h5 class="title">Settings</h5>
          </div>
          <div class="card-body">   
            <div class="row">
              <label class="col-sm-2 col-form-label">Site URL</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="site_url" type="URL" class="form-control" value="<?php echo $siteinfo->info['site_url'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Site Name</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="site_name" type="text" class="form-control" value="<?php echo $siteinfo->info['site_name'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Site Description</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="site_description" type="text" class="form-control" value="<?php echo $siteinfo->info['site_description'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" value="<?php echo $siteinfo->info['email'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Contact Number 1</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="contact_number1" type="text" class="form-control" value="<?php echo $siteinfo->info['contact_number1'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Contact Number 2</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="contact_number2" type="text" class="form-control" value="<?php echo $siteinfo->info['contact_number2'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Fax Number</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="fax_number" type="text" class="form-control" value="<?php echo $siteinfo->info['fax_number'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="address" type="text" class="form-control" value="<?php echo $siteinfo->info['address'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Timing</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="timing" type="text" class="form-control" value="<?php echo $siteinfo->info['timing'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Facebook URL</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="facebook_url" type="text" class="form-control" value="<?php echo $siteinfo->info['facebook_url'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Twitter Username</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="twitter_username" type="URL" class="form-control" value="<?php echo $siteinfo->info['twitter_username'] ?>" required="true">
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Instagram Username</label>
              <div class="col-sm-10">
                <div class="form-group">
                  <input name="instagram_username" type="text" class="form-control" value="<?php echo $siteinfo->info['instagram_username'] ?>" required="true">
                </div>
              </div>
            </div>

            

          </div>
          <div class="card-footer text-center">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</div>

<?php
  include 'template-parts/footer.php';
?>