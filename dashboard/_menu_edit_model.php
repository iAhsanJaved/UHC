<!-- start Edit Model -->
        <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Menu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                               
              <form action="" method="post">
                <div class="modal-body">
                   
                  <input type="hidden" name="menu_id">
                  <div class="container-fluid">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Menu Name</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="menu_name" type="text" class="form-control" value="" required="true">
                        </div>
                       </div>
                    </div>
                    
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Menu URL</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="menu_url" type="URL" class="form-control" value="" required="true">
                        </div>
                       </div>
                    </div>
                    
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Menu Location</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="menu_location" type="text" class="form-control"  required="true" disabled="">
                        </div>
                       </div>
                    </div>
      
                    

                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit" name="updateMenuSubmit" class="btn btn-primary">Update</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </form>

            
              </div>
            </div>
        </div>
        <!-- end Edit Model -->