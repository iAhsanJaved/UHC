<div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="<?php echo $siteinfo->info['site_url'] ?>" class="simple-text logo-normal text-center">
          <?php echo $siteinfo->info['site_name'] ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php echo $current_page == 'Dashboard' ? 'active' : '' ?>">
            <a href="<?php echo $siteinfo->info['site_url'] ?>/dashboard">
              <i class="now-ui-icons ui-1_send"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php echo $current_page == 'Products' ? 'active' : '' ?>">
            <a href="#">
              <i class="now-ui-icons design_app"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Pages'? 'active' : '' ?>">
            <a href="#">
              <i class="now-ui-icons files_paper"></i>
              <p>Pages</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Menu'? 'active' : '' ?>">
            <a href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/menu.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Menu</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Gallery'? 'active' : '' ?>">
            <a href="#">
              <i class="now-ui-icons media-1_album"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Image Slider'? 'active' : '' ?>">
            <a href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/image-slider.php">
              <i class="now-ui-icons design_image"></i>
              <p>Image Slider</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Users'? 'active' : '' ?>">
            <a href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/users.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Customization'? 'active' : '' ?>">
            <a href="#">
              <i class="now-ui-icons design_palette"></i>
              <p>Customization</p>
            </a>
          </li>
          <li class="<?php echo $current_page  == 'Settings'? 'active' : '' ?>">
            <a href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/settings.php">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </div>
    </div>