<?= view("/client/navbar") ?>
<div class="container" style="margin-top:4rem;">
    <div class="row">
        <div class="col-lg-8 h-100 mx-auto ">
            <h4 class="text-center pt-3">Add Your Task</h4>
            <div class="row d-flex align-items-center justify-content-centerS">
                
                <div class="col-lg-6 py-5">
                    <img src="/images/addtask_vect.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 ">
                <form action="<?php echo base_url('client/addtask'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput44">Title</label>
                        <input type="text" name="title" class="form-control rounded-0" id="exampleFormControlInput4" placeholder="Enter title">

                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlPasswor3">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <input type="text" hidden name="name" class="form-control rounded-0" id="exampleFormControlInput4" placeholder="Enter title" value="<?= session()->get('name') ?>">

                    <div class="form-group mt-3">
                        <label for="exampleFormControlSelect14">Select Category</label>
                        <select class="form-control rounded-0" id="category" name="category">
                            <option>--Select Category--</option>
                            <option>Household Issue</option>
                            <option>Commercial</option>
                            <option>Economic</option>
                            <option>Domestic</option>
                        </select>
                    </div>
                    <div class="form-footer mt-3">
                        <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                        <button type="submit" class="btn btn-light btn-pill">Cancel</button>
                    </div>

                </form>

                </div>
            </div>
           
        </div>
    </div>
</div>


<?= view("/client/footer") ?>