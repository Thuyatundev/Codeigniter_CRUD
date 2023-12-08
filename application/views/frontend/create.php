<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                        <div class="card-header">
                            <h5>
                                Add Employee
                                <a href="<?php echo base_url('employee')?>" class="float-end btn btn-warning ">back</a>
                            </h5>
                        </div>
                        <div class="card-body">
                        <form action="<?php echo base_url('employee/store')?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
                            <small class="text-danger"><?php echo form_error('first_name');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                            <small class="text-danger"><?php echo form_error('last_name');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            <small class="text-danger"><?php echo form_error('email');?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                            <small class="text-danger"><?php echo form_error('phone');?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
