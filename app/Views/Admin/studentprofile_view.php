<?php include 'layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Profile Info View</h4>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                   <a class="btn btn-danger" href="<?php echo base_url('stinfo_edit/' . $stinfo_view['id']); ?>">Edit</a>
                </div>
            </div>

        </div>
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                     <div class="col-md-12  text-center">
                                <img src="<?php echo base_url('../../public/uploads/studentsPortal') . '/' . $stinfo_view['photo'] ?>"
                                     alt="images" width="120px" height="100px" name="photo">
                                
                            </div>
                <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                        <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                        <div class="form-group mb-12">
                            <label class="col-md-12 p-0">Student Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="name" value="<?php echo $stinfo_view['name'] ?>"
                                       class="form-control p-0 border-0" readonly>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                        <div class="form-group mb-12">
                            <label for="example-user" class="col-md-12 p-0">User</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0"
                                       name="user" value="<?php echo $stinfo_view['user'] ?>" readonly>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                        <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                        <div class="form-group mb-12">
                            <label for="example-email" class="col-md-12 p-0">Email </label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0"
                                       name="email" value="<?php echo $stinfo_view['email'] ?>" readonly>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                        <div class="form-group mb-4">
                            <label for="example-password" class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" class="form-control p-0 border-0"
                                       name="password" value="<?php echo $stinfo_view['password'] ?>" readonly>
                            </div>
                        </div>
</div>
</div>

                        
                   
                </div>
            </div>
        </div>
    </div>
<?php include 'layouts/footer.php'; ?>