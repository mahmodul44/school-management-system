<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/feerecipt' ?>">Receipt Fee Add</a>
               </div>
          </div>

     </div>
     <!-- /.col-lg-12 -->


     <div class="container-fluid">
        
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
                                             <th class="border-top-0">Total</th>
                                            
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                  <tbody>
                                        <?php if (!empty($reciptlists)) {
                                             $i = 1 + (10 * ($currentPage-1));
                                             foreach ($reciptlists as $recipts) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $recipts['st_name'] ?></td>
                                             <td><?php echo $recipts['st_id'] ?></td>
                                             <td><?php echo $recipts['totals'] ?></td>
                                            
                                             
                                             <td> <a target="_blank"
                                                       href="
                                                       <?php echo base_url('admin/reciptprint/' . $recipts['id']); ?>">Print</a>
                                                  ||<a href="<?php echo base_url('admin/recipt_delete/' . $recipts['id']); ?>"
                                                       onclick="return confirm('Are you sure to delete this row !')">Delete</a>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <tr>
                                             <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                   </tbody>
                              </table>
 <?= $pager->links('reciptlists','data_pagination'); ?>
                         </div>

                    </div>
               </div>
          </div>

     </div>
</div>


<?php include 'layouts/footer.php'; ?>