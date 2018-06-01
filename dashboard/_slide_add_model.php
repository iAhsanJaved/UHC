<!-- start Add Model -->
  <div class="modal fade" id="addSlideModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Slide</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                               
              <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                   
                  <div class="container-fluid">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Slide Title</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="slide_title" type="text" class="form-control" value="" required="true">
                        </div>
                       </div>
                    </div>
                    
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Slide Image</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input name="slide_img" id="upload_img" type="file" required="true">
                        </div>
                       </div>
                    </div>                 

                    <div class="row">
                      <div class="col">
                        <div id="preview_img"></div>
                      </div>
                    </div>
                    

                  </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="submit" name="addSlideSubmit" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </form>

            
              </div>
            </div>
        </div>
        <!-- end Add Model -->