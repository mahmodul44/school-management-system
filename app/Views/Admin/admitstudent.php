<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Admission Fee Info</h4>
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
                                             <th class="border-top-0">Student Name</th>
                                             <th class="border-top-0">School Name</th>
                                             <th class="border-top-0">Photo</th>
                                             <th class="border-top-0">Phone</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($studentlist)) {
                                             $i = 1;
                                             foreach ($studentlist as $student) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $student['Name'] ?></td>
                                             <td><?php echo $student['sName'] ?></td>
                                             <td><img src="<?php echo base_url('uploads/AdmissionForm') . '/' . $student['photo'] ?>"
                                                       alt="Student Photo" width="60px"> </td>
                                             <td><?php echo $student['Phone'] ?></td>
                                             <td>
                                                  <a href="
                                                       <?php echo base_url('admin/admitstudent_delete/' . $student['id']); ?>"
                                                       onclick="
                                                       return confirm('Are you sure to delete this row !')">Delete</a>
                                                  ||<a
                                                       href="<?php echo base_url('admitstudentview/'.$student['id']);?>">View</a>
                                             </td>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <tr>
                                             <td>Record not found</td>
                                        </tr> <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>
<?php include 'layouts/footer.php'; ?>