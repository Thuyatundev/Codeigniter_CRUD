
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                        <div class="card-header">
                            <h5>
                                How to insert data into database
                                <a href="<?php echo base_url('employee/add')?>" class="float-end btn btn-primary">Add Employee</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($emp as $e):?>
                                        <tr>
                                            <td><?php echo $e->id?></td>
                                            <td><?php echo $e->first_name?></td>
                                            <td><?php echo $e->last_name?></td>
                                            <td><?php echo $e->email?></td>
                                            <td><?php echo $e->phone?></td>
                                            <td>
                                                <a href="<?= base_url('employee/edit/'.$e->id)?>" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('employee/delete/'.$e->id)?>" class="btn btn-danger" onclick="return confirm('Are Your Sure?')">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>


