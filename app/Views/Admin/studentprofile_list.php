<?php include 'layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Student Portal List</h4>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/studentreg' ?>">Student Portal Add</a>
                </div>
            </div>

        </div>
        <!-- /.col-lg-12 -->


        <div class="container-fluid">
          
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Students Care</h3>
                       
                        <h3 style="color: red;font-weight:bold;text-align:center">
                            <?php echo session()->getFlashdata('meg'); ?></h3>
                        <div class="table-responsive">
                            <table id="" class="table table-hover">
                                <thead>

                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Student Name</th>
                                    <th class="border-top-0">User</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">password</th>
                                    <th class="border-top-0">Photo</th>
                                    <th class="border-top-0">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($studentreglist)) {
                                    $i = 1 + (2 * ($currentPage-1));
                                    foreach ($studentreglist as $students) { ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $students['name'] ?></td>
                                            <td><?php echo $students['user'] ?></td>
                                            <td><?php echo $students['email'] ?></td>
                                            <td><?php echo $students['password'] ?></td>
                                            <td><img src="<?php echo base_url('../../public/uploads/studentsPortal') . '/' . $students['photo'] ?>"
                                                     alt="imges" width="80px" height="40px">
                                            </td>
                                            <td><a href="<?php echo base_url('admin/stinfo_delete/' . $students['id']); ?>"
                                                     onclick="return confirm('Are you sure to delete this row !')">Delete</a>||<a
                                                    href="<?php echo base_url('stinfo_edit/' . $students['id']); ?>">Edit</a>

                                            </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td>Records Not Found</td>
                                    </tr> <?php } ?>
                                </tbody>
                            </table>
                            <?= $pager->links('studentreglist','data_pagination'); ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


<?php include 'layouts/footer.php'; ?>