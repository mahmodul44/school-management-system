<?php include 'layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Student Portal Info Update</h4>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
<?php if (session()->get('level') == 1) { ?>
                    <a class="btn btn-danger " href="<?= base_url() . '/admin/studentreglist' ?>">Student List</a>
                    <?php } ?>
                    <a class="btn btn-danger " href="<?php echo base_url('studentprofile_view/'.session()->get('user')) ?>">Back</a>
                </div>
            </div>

        </div>
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo base_url('userUpdate/' . $stinfo_edit['id']); ?>"
                          method="post" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Student Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="name" value="<?php echo $stinfo_edit['name'] ?>"
                                       class="form-control p-0 border-0" >
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">User</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0"
                                       name="user" value="<?php echo $stinfo_edit['user'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email </label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0"
                                       name="email" value="<?php echo $stinfo_edit['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-password" class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control p-0 border-0"
                                       name="password" value="<?php echo $stinfo_edit['password'] ?>">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Photo</label>
                            <div class="col-md-12 border-bottom p-0">
                                <img src="<?php echo base_url('../../public/uploads/studentsPortal') . '/' . $stinfo_edit['photo'] ?>"
                                     alt="images" width="80px" height="60px" name="photo">
                                <input type="file" class="form-control p-0 border-0" name="photo">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'layouts/footer.php'; ?>