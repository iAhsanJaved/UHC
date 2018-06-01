<?php
  include 'template-parts/header.php';

  if ($userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/index.php');
  }

  $loginAttempt = false;

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($userAuth->auth($username, $password)) {
      header('Location: index.php');
    } else {
      $loginAttempt = true;
    }
  }

?>

<div class="main-panel login">
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">

    <div class="col-md-4 mx-auto">
      <div class="card">
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">

          <div class="card-header">
            <div class="logo-container text-center">
                <img src="<?php echo $siteinfo->info['site_url'] ?>/assets/img/logo/UnityHomesCollections.PNG" alt="">
            </div>
          </div>
		  <div class="card-body">
		  	
        <?php if ($loginAttempt): ?>
            <div class="alert alert-dismissible alert-danger">            
              <span><b> Login failed</b>: Incorrect username and password.</span>
            </div>
		  	<?php endif; ?>

        <div class="row">
              <div class="col-sm-8 mx-auto">
                <div class="form-group">
                  <input name="username" type="text" class="form-control" placeholder="Username" required="true">
                </div>         
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 mx-auto">
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Password" required="true">
                </div>         
              </div>
            </div>

		  </div>            
		  <div class="card-footer text-center">
		  	<div class="row">
              <div class="col-sm-8 mx-auto">
            	<input type="submit" name="submit" class="btn btn-primary btn-round  btn-block" value="Login">
            	</div>
            </div>
          </div>

      </form>
       </div>
    </div>

  </div>
</div>
</div>

<?php
include 'template-parts/footer.php';
?>