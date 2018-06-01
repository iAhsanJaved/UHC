<!-- start Add Model -->
        <div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Menu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                               
              <form action="" method="post">
                <div class="modal-body">
                   
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
                 

                   <input name="menu_location" type="hidden"   required="true">
                 

                    

                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit" name="addMenuSubmit" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </form>

            
              </div>
            </div>
        </div>
        <!-- end Add Model -->