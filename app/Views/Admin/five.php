<?php include "layouts/header.php" ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Attendence For Class Five </h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="fivelist">Attedence List</a>
               </div>
          </div>

     </div>
     <!-- /.col-lg-12 -->
     <?php

     use App\Models\AttendenceModel;

     $atn = new AttendenceModel();
     $cur_date = date("Y-m-d");

     ?>

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
                              <form action="<?php echo site_url('admin/atnfiveinsert'); ?>" method="POST">
                                   <div style="text-align: center;">

                                        <strong>Date:</strong><?php echo $cur_date; ?>
                                   </div>
                                   <table class="table">
                                        <thead>

                                             <tr>
                                                  <th class="border-top-0">#</th>
                                                  <th class="border-top-0">ID NO</th>
                                                  <th class="border-top-0">Name</th>
                                                  <th class="border-top-0">Action</th>

                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php if (!empty($std_five)) {
                                                  $i = 1;
                                                  foreach ($std_five as $five) { ?>
                                             <tr>
                                                  <td><?php echo $i++; ?></td>
                                                  <td><?php echo $five['id_no'] ?></td>
                                                  <td><?php echo $five['st_name'] ?></td>

                                                  <td> <input type="radio" name="attend[<?php echo $five['id_no']; ?>]"
                                                            value="present">p
                                                       <input type="radio" name="attend[<?php echo $five['id_no']; ?>]"
                                                            value="absent">A

                                                  </td>
                                             </tr>
                                             <?php }
                                             } else { ?>
                                             <tr>
                                                  <td>Records Not Found</td>
                                             </tr> <?php } ?>
                                        </tbody>
                                   </table>
                                   <button type="submit" name="submit">Submit</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>
<?php include 'layouts/footer.php' ?>