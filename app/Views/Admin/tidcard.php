<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Teacher ID Card List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                    <!-- <div class="d-md-flex">
                         <ol class="breadcrumb ml-auto">
                    </div>

                    </ol> -->
                    <a class="btn btn-danger " href="tidcardadd">Teacher ID Card Add</a>
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
                              <table class="table">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Title</th>
                                             <th class="border-top-0">Teacher Name</th>
                                             <th class="border-top-0">Ocupation</th>
                                             <th class="border-top-0">Photo</th>
                                             <th class="border-top-0">Phone</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($teachersid)) {
                                             $i = 1;
                                             foreach ($teachersid as $teacherid) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $teacherid['title'] ?></td>
                                             <td><?php echo $teacherid['t_name'] ?></td>
                                             <td><?php echo $teacherid['ocupation'] ?></td>

                                             <td> <img src="<?php echo base_url('/uploads/TeacherID') . '/' . $teacherid['photo'] ?>"
                                                       alt="Teacher ID Card" width="60px" height="50px"></td>
                                             <td><?php echo $teacherid['mobile'] ?></td>
                                             <td> <a
                                                       href="
                                                       <?php echo base_url('tidcardprint/' . $teacherid['id']); ?>">Print</a>
                                                  ||<a
                                                       href="<?php echo base_url('admin/tidcard_delete/' . $teacherid['id']); ?>">Delete</a>

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