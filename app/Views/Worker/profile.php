<?= view("/worker/navbar") ?>
<div class="container" style="margin-top:4rem;">
  <div class="row">
    <div class="col-lg-10 h-100 mx-auto py-5  d-flex flex-column align-items-center justify-content-center">
      <h4 class="text-center pt-4">Your Details</h4>


      <form action="<?php echo base_url('auth/profile'); ?>" method="post" enctype="multipart/form-data">
        <div class="row mb-2">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="name" value="<?= $user['name'] ?>">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group">
              <label for="lastName">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
            </div>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="userName">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="email">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="<?= $user['address'] ?>">
            </div>
          </div>
        </div>

        <div class="form-group mb-4">
          <label for="newPassword">New password</label>
          <input type="password" class="form-control" id="newPassword" name="password">
        </div>

        <div class="form-group mb-4">
          <label for="conPassword">Confirm password</label>
          <input type="password" class="form-control" id="conPassword">
        </div>

        <div class="d-flex justify-content-between mt-6">
          <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
          <a type="submit" href="/auth/logout" class=" text-center btn btn-danger mb-2 btn-pill">LogOut</a>
        </div>

      </form>



    </div>
  </div>
</div>

