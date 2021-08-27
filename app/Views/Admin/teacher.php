<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Teacher List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                    <!-- <div class="d-md-flex">
                         <ol class="breadcrumb ml-auto">
                    </div>

                    </ol> -->
                    <a class="btn btn-danger " href="teacheradd">Teacher Add</a>
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
                         <div class="table-responsive">
                              <h3 style="color: red;font-weight:bold;text-align:center">
                                   <?php echo session()->getFlashdata('data_del'); ?></h3>
                              <table class="table">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Teacher Name</th>
                                             <th class="border-top-0">Ocupation</th>
                                             <th class="border-top-0">Address </th>
                                             <th class="border-top-0">Photo</th>
                                             <th class="border-top-0">Phone</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($teachers)) {
                                             $i = 1;
                                             foreach ($teachers as $teacher) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $teacher['t_name'] ?></td>
                                             <td><?php echo $teacher['ocupation'] ?></td>
                                             <td><?php echo $teacher['address'] ?></td>
                                             <td>
                                                  <img src="<?php echo base_url('/uploads/Teacher') . '/' . $teacher['photo'] ?>"
                                                       alt="Teacher Images" width="60px" height="50px">
                                             </td>
                                             <td><?php echo $teacher['phone'] ?></td>
                                             <td> <a
                                                       href="<?php echo base_url('admin/teacher_delete/' . $teacher['id']); ?>">Delete</a>

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