<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="idcardadd">ID Card Add</a>
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
                              <?php echo session()->getFlashdata('meg'); ?></h3>
                         <div class="table-responsive">
                              <table id="" class="table table-hover">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Student Name</th>
                                             <th class="border-top-0">ID NO</th>
                                             <th class="border-top-0">Class</th>
                                             <th class="border-top-0">Section</th>
                                             <th class="border-top-0">Phone</th>
                                             <th class="border-top-0">Photo</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($idcardlist)) {
                                             $i = 1 + (2 * ($currentPage-1));
                                             foreach ($idcardlist as $idcard) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $idcard['st_name'] ?></td>
                                             <td><?php echo $idcard['id_no'] ?></td>
                                             <td><?php echo $idcard['class'] ?></td>
                                             <td><?php echo $idcard['section'] ?></td>
                                             <td><?php echo $idcard['mobile'] ?></td>
                                             <td><img src="<?php echo base_url('/uploads/IDCard') . '/' . $idcard['photo'] ?>"
                                                       alt="imges" width="80px" height="60px">
                                             </td>
                                             <td> <a
                                                       href="
                                                       <?php echo base_url('admin/idcardprint/' . $idcard['id']); ?>">Print</a>
                                                  ||<a href="<?php echo base_url('admin/idcard_delete/' . $idcard['id']); ?>"
                                                       onclick="return confirm('Are you sure to delete this row !')">Delete</a>||<a
                                                       href="<?php echo base_url('idcardedit/' . $idcard['id']); ?>">Edit</a>

                                             </td>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <tr>
                                             <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                   </tbody>
                              </table>
                              <?= $pager->links('idcardlist','data_pagination'); ?>
                         </div>

                    </div>
               </div>
          </div>

     </div>
</div>


<?php include 'layouts/footer.php'; ?>