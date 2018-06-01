<!-- start View Model -->
        <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">View User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                               
                <div class="modal-body">
                   
                  <div class="container-fluid">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">User ID</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="user_id" type="number" class="form-control"  required="true" disabled="">
                        </div>
                       </div>
                    </div>
                   
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="username" type="text" class="form-control"  required="true" disabled="">
                        </div>
                       </div>
                    </div>
                    
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="email" type="email" class="form-control" required="true" disabled="">
                        </div>
                       </div>
                    </div>
        
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="name" type="text" class="form-control"  required="true" disabled="">
                        </div>
                       </div>
                    </div>
      
                    <div class="row">
                      <label class="col-sm-2 col-form-label">User Type</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <select name="user_type_id" class="form-control" disabled="">
                            <?php foreach ($usertype->user_type as $type):?>
                            <option value="<?php echo $type['user_type_id']; ?>"><?php echo $type['user_type_title']; ?></option>
                            <?php endforeach; ?>

                          </select>
                        </div>
                       </div>
                    </div>
  
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Created On</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="created_on" class="form-control datetimepicker"  type="text"  value="<?php echo '' ?>" required="true" disabled="">
                        </div>
                       </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Modified On</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="modified_on" class="form-control datetimepicker"  type="text"  value="<?php echo '' ?>" required="true" disabled="">
                        </div>
                       </div>
                    </div>

                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            
              </div>
            </div>
        </div>
        <!-- end View Model -->