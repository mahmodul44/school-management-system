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
                                             <th class="border-top-0">Payment Method</th>
                                             <th class="border-top-0">Mobile </th>
                                             <th class="border-top-0">Transaction ID</th>
                                             <th class="border-top-0">Delete</th>
                                             <th class="border-top-0">Share</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($paymentlist)) {
                                             $i = 1;
                                             foreach ($paymentlist as $payment) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $payment['st_name'] ?></td>
                                             <td><?php echo $payment['payment_method'] ?></td>
                                             <td><?php echo $payment['mobile'] ?></td>
                                             <td><?php echo $payment['trxID'] ?></td>
                                             <td>
                                                  <a href="<?php echo base_url('admin/admissionfee_delete/' . $payment['id']); ?>"
                                                       onclick="
                                                       return confirm('Are you sure to delete this row !')">Delete</a>

                                             </td>
                                             <td>
                                                  <a href="<?php echo base_url('admin/admission_fee/' . $payment['id']); ?>"
                                                       class="sharethis-inline-share-buttons" href=""></a>

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
<script type="text/javascript"
     src="https://platform-api.sharethis.com/js/sharethis.js#property=60080570c03e54001829c85c&product=inline-share-buttons"
     async="async"></script>
<?php include 'layouts/footer.php'; ?>