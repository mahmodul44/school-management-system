<?php include 'layouts/header.php' ?>

<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
               </div>
               <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                         <ol class="breadcrumb ml-auto">

                              <li><a target="_blank" href="../index">Visit Website</a></li>

                         </ol>

                    </div>
               </div>
          </div>
          <!-- /.col-lg-12 -->
     </div>

     <div class="container-fluid">

          <div class="row justify-content-center">
               <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                         <h3 class="box-title">Total Class</h3>
                         <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                   <div id="sparklinedash"><canvas width="67" height="30"
                                             style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                              </li>
                              <li class="ml-auto"><span class="counter text-success">15</span></li>
                         </ul>
                    </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                         <h3 class="box-title">Total Student</h3>
                         <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                   <div id="sparklinedash2"><canvas width="67" height="30"
                                             style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                              </li>
                              <li class="ml-auto"><span class="counter text-purple">869</span></li>
                         </ul>
                    </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                         <h3 class="box-title">Total Teacher</h3>
                         <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                   <div id="sparklinedash3"><canvas width="67" height="30"
                                             style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                              </li>
                              <li class="ml-auto"><span class="counter text-info">911</span>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>

          <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="white-box">
                         <h3 class="box-title">Students Yearly Admit</h3>

                         <div id="ct-visits" style="height: 405px;">
                              <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                              </div>
                         </div>
                    </div>
               </div>
          </div>


     </div>

     <!-- End Container fluid  -->

     <!-- footer -->
     <!-- ============================================================== -->
     <?php include 'layouts/footer.php'  ?>