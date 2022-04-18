<div class="modal fade" id="userModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding or Updating user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="addForm" enctype="multipart/form-data" action="">
                <div class="modal-body">
                    <label for="">Name</label>
                    <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt"></i>
                                    </span>

                        <input type="text" required autocomplete="off" id="username" name="username" class="form-control" placeholder="Enter Name ">

                    </div>
                    <label for="">Email</label>
                    <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>

                        <input type="email" required autocomplete="off" id="email" name="email" class="form-control" placeholder="Enter Email">

                    </div>
                    <label for="">Phone</label>
                    <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>

                        <input type="tel" required autocomplete="off" id="phone" name="phone" class="form-control" maxlength="10" minlength="10" placeholder="Enter Phone">

                    </div>
                    <label for="">Photo</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="image" name="photo" placeholder="Select Image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <input type="hidden" name="action" value="adduser">
                    <input type="hidden" name="userId" id="userId" value="">
                </div>
            </form>
        </div>
    </div>
</div>