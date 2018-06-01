<!-- start Delete Model -->
        <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                                  
              <form action="" method="post">
                <div class="modal-body">
                    <div class="swal2-content">Do you want to delete user?</div> 
                    <input type="hidden" name="user_id">
                </div>
                <div class="modal-footer">
                  <button type="submit" name="deleteUserSubmit" class="btn btn-primary">Yes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </form>

            
              </div>
            </div>
          </div>
        <!-- end Delete Model -->