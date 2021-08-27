<?php include 'layouts/header.php' ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Course List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="courseadd">Course Add</a>
               </div>
          </div>

     </div>
     <!-- /.col-lg-12 -->


     <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
               <div class="col-sm-12">
                    <div class="white-box">
                         <h3 class="box-title">Basic Table</h3>
                         <p class="text-muted">Add class <code>.table</code></p>
                         <h3 style="color: red;font-weight:bold;text-align:center">
                              <?php echo session()->getFlashdata('data_del'); ?></h3>
                         <div class="table-responsive">
                              <table class="table">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Class Name</th>
                                             <th class="border-top-0">photo</th>
                                             <th class="border-top-0">Fees</th>
                                             <th class="border-top-0">Description</th>
                                             <th class="border-top-0">class Duration</th>
                                             <th class="border-top-0">total student</th>
                                             <th class="border-top-0">class time</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($courses)) {
                                             $i = 1;
                                             foreach ($courses as $course) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $course['classname'] ?></td>
                                             <td><img src="<?php echo base_url('/uploads/course') . '/' . $course['photo'] ?>"
                                                       alt="imges" width="80px" height="50px">
                                             </td>
                                             <td><?php echo $course['fee'] ?></td>
                                             <td><?php echo $course['description'] ?></td>
                                             <td><?php echo $course['duration'] ?></td>
                                             <td><?php echo $course['t_student'] ?></td>
                                             <td><?php echo $course['class_time'] ?></td>
                                             <td> <a
                                                       href="<?php echo base_url('admin/course_delete/' . $course['id']); ?>">Delete</a>

                                             </td>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <tr>
                                             <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>
<?php include 'layouts/footer.php' ?>