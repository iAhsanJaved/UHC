<?php
  include 'template-parts/header.php';

  if (!$userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/login.php');
  }

  $current_page = "Image Slider";
  include 'template-parts/side-nav.php';
  include 'template-parts/top-nav.php';
  include  '../SiteSlide.php';  
  $siteslide = new SiteSlide($conn->getConnection());

  $errors = array();

  if (isset($_POST['addSlideSubmit'])) {
    
    $target_dir = $_SERVER['DOCUMENT_ROOT']."/CMS/assets/img/slider-img/";
    $target_file = $target_dir . basename($_FILES["slide_img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["slide_img"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        $errors[] = "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      $errors[] =  "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["slide_img"]["size"] > 500000) {
      $errors[] =  "Sorry, your file is too large.";
      $uploadOk = 0;
    }
        
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
      $errors[] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $errors[] =  "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["slide_img"]["tmp_name"], $target_file)) {
        $siteslide->addSlide($_POST['slide_title'], $_FILES["slide_img"]["name"]);
      } else {
        $errors[] =  "Sorry, there was an error uploading your file.";
      }
    }

  }


  $isNotSlideDeleted = false;
  $isSlideDeleted = false;
  if (isset($_POST['deleteSlideSubmit'])) {
    $slide =  $siteslide->getSlideByID($_POST['slide_id']);
    if ($siteslide->deleteSlide($_POST['slide_id'])) {
      if (unlink(
        $_SERVER['DOCUMENT_ROOT']
        ."/CMS/assets/img/slider-img/"
        .$slide['slide_img'])) {

        $isSlideDeleted = true;

      }
    } else {
      $isNotSlideDeleted = true;
    }
  }
  
  $isNotSlideUpdated = false;
  $isSlideUpdated = false;
  if (isset($_POST['updateSlideSubmit'])) {
    if ($siteslide->updateSlide(
      $_POST['slide_id'], 
      $_POST['slide_title'])) {
      $isSlideUpdated = true;
    } else {
      $isNotSlideUpdated = true;
    }
  }

  
  if (isset($_POST['slideOrderSubmit'])) {
    $i = 1;
    foreach ($_POST as $key => $value) {
      if ($key != "slideOrderSubmit") {
        // echo "Menu ID: ".$value.' '.$i.'<br>';
        $siteslide->changeSlideOrder($value, $i++);
      }
    }
  }

  $siteslide->fetchSlides();

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
                <h4 class="card-title">Image Slides</h4>    
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-round btn-info btn-block float-right" data-toggle="modal" data-target="#addSlideModal">
                  <i class="fas fa-plus"> Slide</i>
                </button>    
              </div>  
            </div>
          </div>

          <div class="card-body">            

            <?php foreach ($errors as $error): ?>   
              <div class="alert alert-danger alert-dismissible">    
                <span><?php echo $error ?></span>
              </div>
            <?php endforeach; ?>
        

            <?php if (empty($siteslide->site_slides)) : ?>
            
            <div class="alert alert-info">
              <span><b> Image Slider</b>: No image slide exists.</span>
            </div>
          
            <?php else: ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <ol id="sortableImageSlider" class="list-group menu">
              
              <?php
              $i = 0; 
              foreach ($siteslide->site_slides as $single_slide):?>
              
              <li class="list-group-item">

                <img src="<?php 
                          echo $siteinfo->info['site_url'].'/assets/img/slider-img/'.$single_slide['slide_img']; 
                          ?>" 
                      alt="<?php echo $single_slide['slide_title']; ?>" class="img-thumbnail">
                
                <?php echo $single_slide['slide_title']; ?>
                
                <input type="hidden" name="slide_id_<?php echo $i++ ?>" value="<?php echo $single_slide['slide_id']; ?>">
                <span class="float-right">
                  <button type="button" class="btn btn-round btn-info btn-icon btn-sm like" data-toggle="modal" data-target="#viewSlideModal" data-slideid="<?php echo $single_slide['slide_id']; ?>">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-warning btn-icon btn-sm edit" data-toggle="modal" data-target="#editSlideModal" data-slideid="<?php echo $single_slide['slide_id']; ?>">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" class="btn btn-round btn-danger btn-icon btn-sm remove" data-toggle="modal" data-target="#deleteSlideModal" data-slideid="<?php echo $single_slide['slide_id']; ?>">
                    <i class="fas fa-times"></i>
                  </button>
                </span>
              </li>
              <?php endforeach; ?>
            </ol>
            <div class=" text-center">
              <button type="submit" name="slideOrderSubmit" class="btn btn-primary">Save</button>
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
    include '_slide_add_model.php';
    include '_slide_view_model.php';
    include '_slide_delete_model.php';
    include '_slide_edit_model.php';

  ?>

  <?php
    include 'template-parts/footer.php';
  ?>