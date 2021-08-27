<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Payment List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                    <!-- <div class="d-md-flex">
                         <ol class="breadcrumb ml-auto">
                    </div>

                    </ol> -->
                    <a class="btn btn-danger " href="paymentadd">Payment Add</a>
               </div>
          </div>

     </div>
     <!-- /.col-lg-12 -->


     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-4 col-sm-6 col-xs-12">
                 <div class="white-box analytics-info">
                     <a href="<?php echo base_url('admin/science_paymentlist') ?>" class="box-title">SSC Science Payment</a>
                     <ul class="list-inline two-part d-flex align-items-center mb-0">
                         <li>
                             <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                             </div>
                         </li>
                         <li class="ml-auto"><span class="counter text-success">15</span></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4 col-sm-6 col-xs-12">
                 <div class="white-box analytics-info">
                     <a href="" class="box-title">SSC Arts Payment </a>
                     <ul class="list-inline two-part d-flex align-items-center mb-0">
                         <li>
                             <div id="sparklinedash2"><canvas width="67" height="30"
                                                              style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                             </div>
                         </li>
                         <li class="ml-auto"><span class="counter text-purple">69</span></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4 col-sm-6 col-xs-12">
                 <div class="white-box analytics-info">
                     <a href="" class="box-title">Class Eight Payment</a>
                     <ul class="list-inline two-part d-flex align-items-center mb-0">
                         <li>
                             <div id="sparklinedash3"><canvas width="67" height="30"
                                                              style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                             </div>
                         </li>
                         <li class="ml-auto"><span class="counter text-info">11</span>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>


     </div>
</div>

<?php include 'layouts/footer.php'; ?>