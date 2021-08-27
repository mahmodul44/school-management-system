<?php include 'layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Student Portal Add</h4>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/studentreglist' ?>">Student List</a>
                </div>
            </div>

        </div>
         <h3 style="color: red;font-weight:bold;text-align:center">
                            <?php echo session()->getFlashdata('meg'); ?></h3>
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('userInsert'); ?>"
                          method="post" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Student Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Student Full Name" name="name"
                                       class="form-control p-0 border-0" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">User</label>
                            <div class="col-md-12 border-bottom p-0">
                               <select class="form-control p-0 border-0" name="user" required>
                                        <option value="">Select One</option>
                                        <?php foreach ($st_idlist as $idlist){?>
                                            <option value="<?php echo $idlist['id_no'] ?>"><?php echo $idlist['id_no'] ?> (<?php echo $idlist['st_name'] ?>)</option>
                                        <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email </label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Email ID" class="form-control p-0 border-0"
                                       name="email">
                            </div>
                        </div>


                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Photo</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" class="form-control p-0 border-0" name="photo">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'layouts/footer.php'; ?>