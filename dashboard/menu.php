<?php
  include 'template-parts/header.php';

  if (!$userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/login.php');
  }

  $current_page = "Menu";
  include 'template-parts/side-nav.php';
  include 'template-parts/top-nav.php';
  include  '../SiteMenu.php';  
  $sitemenu = new SiteMenu($conn->getConnection());

  $isNotMenuDeleted = false;
  $isMenuDeleted = false;
  if (isset($_POST['deleteMenuSubmit'])) {
    if ($sitemenu->deleteMenu($_POST['menu_id'])) {
      $isMenuDeleted = true;
    } else {
      $isNotMenuDeleted = true;
    }
  }
  
  $isNotMenuUpdated = false;
  $isMenuUpdated = false;
  if (isset($_POST['updateMenuSubmit'])) {
    if ($sitemenu->updateMenu(
      $_POST['menu_id'], 
      $_POST['menu_name'], 
      $_POST['menu_url'])) {
      $isMenuUpdated = true;
    } else {
      $isNotMenuUpdated = true;
    }
  }

  $isNotMenuAdded = false;
  $isMenuAdded = false;
  if (isset($_POST['addMenuSubmit'])) {
    if ($sitemenu->addMenu(
      $_POST['menu_name'], 
      $_POST['menu_url'], 
      $_POST['menu_location'])) {
      $isMenuAdded = true;
    } else {
      $isNotMenuAdded = true;
    }
  }
  
  if (isset($_POST['menuOrderSubmit'])) {
    $i = 1;
    foreach ($_POST as $key => $value) {
      if ($key != "menuOrderSubmit") {
        // echo "Menu ID: ".$value.' '.$i.'<br>';
        $sitemenu->changeMenuOrder($value, $i++);
      }
    }
  }
  $sitemenu->fetchMenus();

?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">

    <div class="col-md-12">
      <div class="card">

        
          <div class="card-header">
            <div class="row">
              <div class="col-md-10">
                <h4 class="card-title">Header Menu</h4>    
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-round btn-info btn-block float-right" data-toggle="modal" data-menulocation="0" data-target="#addMenuModal">
                  <i class="fas fa-plus"> Menu</i>
                </button>    
              </div>  
            </div>
          </div>

          <div class="card-body">            

            <?php if (empty($sitemenu->header_menu)) : ?>
            
            <div class="alert alert-info">
              <span><b> Menus not founds</b>: No header menu exists.</span>
            </div>
          
            <?php else: ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <ol id="sortableHeaderMenu" class="list-group menu">
              
              <?php
              $i = 0; 
              foreach ($sitemenu->header_menu as $single_menu):?>
              
              <li class="list-group-item">
                <?php echo $single_menu['menu_name']; ?>
                <input type="hidden" name="menu_id_<?php echo $i++ ?>" value="<?php echo $single_menu['menu_id']; ?>">
                <span class="float-right">
                  <button type="button" class="btn btn-round btn-info btn-icon btn-sm like" data-toggle="modal" data-target="#viewMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-warning btn-icon btn-sm edit" data-toggle="modal" data-target="#editMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-danger btn-icon btn-sm remove" data-toggle="modal" data-target="#deleteMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-times"></i>
                  </button>
                </span>
              </li>
              <?php endforeach; ?>
            </ol>
            <div class=" text-center">
              <button type="submit" name="menuOrderSubmit" class="btn btn-primary">Save</button>
            </div>
            </form>
            

            <?php endif; ?>

          </div>

          <div class="card-footer">
          </div>


      </div>

    </div>
    
    <div class="col-md-12">
      <div class="card">

        
          <div class="card-header">
            <div class="row">
              <div class="col-md-10">
                <h4 class="card-title">Footer Menu</h4>    
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-round btn-info btn-block float-right" data-toggle="modal" data-menulocation="1" data-target="#addMenuModal">
                  <i class="fas fa-plus"> Menu</i>
                </button>    
              </div>  
            </div>
          </div>

          <div class="card-body">            

            <?php if (empty($sitemenu->footer_menu)) : ?>
            
            <div class="alert alert-info">
              <span><b> Menus not founds</b>: No footer menu exists.</span>
            </div>
          
            <?php else: ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <ol id="sortableFooterMenu" class="list-group menu">
              
              <?php
              $i = 0; 
              foreach ($sitemenu->footer_menu as $single_menu):?>
              
              <li class="list-group-item">
                <?php echo $single_menu['menu_name']; ?>
                <input type="hidden" name="menu_id_<?php echo $i++ ?>" value="<?php echo $single_menu['menu_id']; ?>">
                <span class="float-right">
                  <button type="button" class="btn btn-round btn-info btn-icon btn-sm like" data-toggle="modal" data-target="#viewMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-warning btn-icon btn-sm edit" data-toggle="modal" data-target="#editMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-danger btn-icon btn-sm remove" data-toggle="modal" data-target="#deleteMenuModal" data-menuid="<?php echo $single_menu['menu_id']; ?>">
                    <i class="fas fa-times"></i>
                  </button>
                </span>
              </li>
              <?php endforeach; ?>
            </ol>
            <div class=" text-center">
              <button type="submit" name="menuOrderSubmit" class="btn btn-primary">Save</button>
            </div>
            </form>

            <?php endif; ?>

          </div>

          <div class="card-footer">
          </div>


      </div>

    </div>

  </div>
</div>


  <?php 
    include '_menu_add_model.php';

    include '_menu_view_model.php';

    include '_menu_edit_model.php';

    include '_menu_delete_model.php';

  ?>

  <?php
    include 'template-parts/footer.php';
  ?>