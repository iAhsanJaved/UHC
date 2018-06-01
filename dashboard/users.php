<?php

  include 'template-parts/header.php';

  if (!$userAuth->isAuthenticated()) {
    header('Location: '.$siteinfo->info['site_url'].'/dashboard/login.php');
  }

  $current_page = "Users";
  include 'template-parts/side-nav.php';
  include 'template-parts/top-nav.php';
  include  '../User.php';
  include '../UserType.php';
  $user = new User($conn->getConnection());
  $usertype = new UserType($conn->getConnection());


  $isNotUserDeleted = false;
  $isUserDeleted = false;
  if (isset($_POST['deleteUserSubmit'])) {
    if ($user->deleteUser($_POST['user_id'])) {
      $isUserDeleted = true;
    } else {
      $isNotUserDeleted = true;
    }
  }

  $isNotUserUpdated = false;
  $isUserUpdated = false;
  if (isset($_POST['updateUserSubmit'])) {
    if ($user->updateUser(
        $_POST['user_id'], 
        $_POST['username'], 
        $_POST['password'], 
        $_POST['email'], 
        $_POST['name'], 
        $_POST['user_type_id'])){
      $isUserUpdated = true;
    } else {
      $isNotUserUpdated = true;
    }
  }
  
  $isNotUserAdded = false;
  $isUserAdded = false;
  if (isset($_POST['addUserSubmit'])) {
    if ($user->addUser(
          $_POST['username'], 
          $_POST['password'], 
          $_POST['email'], 
          $_POST['name'], 
          $_POST['user_type_id'])){
      $isUserAdded = true;
    } else {
      $isNotUserAdded = true;
    }
  }

  $user->fetchUsers();
  
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
              <h4 class="card-title">Users</h4>    
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-round btn-info btn-block float-right" data-toggle="modal" data-target="#addUserModal">
                <i class="fas fa-user-plus"> User</i>
              </button>    
            </div>  
          </div>
          
          
        </div>
        
        <div class="card-body">
          <?php if ($isUserAdded) : ?>   
            <div class="alert alert-success alert-dismissible">    
              <span><b> User - </b> Successfully new user added.</span>
            </div>
          <?php endif; ?>

          <?php if ($isNotUserAdded) : ?>   
            <div class="alert alert-danger alert-dismissible">    
              <span><b> User - </b> Failed to add user.</span>
            </div>
          <?php endif; ?>

          <?php if ($isUserUpdated) : ?>   
            <div class="alert alert-success alert-dismissible">    
              <span><b> User - </b> Successfully user edited.</span>
            </div>
          <?php endif; ?>

          <?php if ($isNotUserUpdated) : ?>   
            <div class="alert alert-danger alert-dismissible">    
              <span><b> User - </b> Failed to edit user.</span>
            </div>
          <?php endif; ?>

          <?php if ($isUserDeleted) : ?>   
            <div class="alert alert-success alert-dismissible">    
              <span><b> User - </b> Successfully user deleted.</span>
            </div>
          <?php endif; ?>

          <?php if ($isNotUserDeleted) : ?>   
            <div class="alert alert-danger alert-dismissible">    
              <span><b> User - </b> Failed to delete user.</span>
            </div>
          <?php endif; ?>


          <?php if (empty($user->users)) : ?>
            
            <div class="alert alert-info">
              <span><b> Users not founds</b>: No user record exists.</span>
            </div>
          
          <?php else: ?>

          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              
              <tbody>
                <?php foreach ($user->users as $single_user):?>
                <tr>
                  <td>
                    <?php echo $single_user['user_id']; ?>
                  </td>
                  <td>
                    <?php echo $single_user['name']; ?>
                  </td>
                  <td>
                    <?php echo $single_user['username']; ?>
                  </td>
                  <td>
                    <?php echo $single_user['email']; ?>
                  </td>
                  <td>
                    <?php echo $single_user['user_type_title']; ?>
                  </td>
                  <td class="text-right">
                      <button type="button" class="btn btn-round btn-info btn-icon btn-sm like" data-toggle="modal" data-target="#viewUserModal" data-userid="<?php echo $single_user['user_id']; ?>">
                        <i class="fas fa-user"></i>
                      </button>

                      <button type="button" class="btn btn-round btn-warning btn-icon btn-sm edit" data-toggle="modal" data-target="#editUserModal" data-userid="<?php echo $single_user['user_id']; ?>">
                        <i class="fas fa-edit"></i>
                      </button>

                      <button type="button" class="btn btn-round btn-danger btn-icon btn-sm remove" data-toggle="modal" data-target="#deleteUserModal" data-userid="<?php echo $single_user['user_id']; ?>">
                        <i class="fas fa-times"></i>
                      </button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
          
            </table>

          </div>

        

      
        <?php endif; ?>
        </div>
      </div>
    </div>
    </div>
</div>

<?php 
  include '_users_add_model.php';
        
  include '_users_edit_model.php';         
        
  include '_users_view_model.php';
        
  include '_users_delete_model.php'; 
?>
<?php
  include 'template-parts/footer.php';
?>