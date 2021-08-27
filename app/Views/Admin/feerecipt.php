<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Fee Recipt</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/feereciptlist' ?>">Receipt Fee List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-12 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('reciptInsert'); ?>"
                         method="post">
                        <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                        <div class="form-group mb-4">
                              <label class="col-sm-12"></label>
                              <div class="col-sm-12 border-bottom">
                                   <select class="form-control p-0 border-0" name="reciptbook" required>
                                        <option value="">Choose One....</option>
                                        <option value="Student Fee Receipt ">Student Fee Receipt </option>
                                        <option value="Teacher Sallery">Teacher Sallery</option>
                                       
                                   </select>
                              </div>
                         </div>
                         </div>
                         </div>
                          <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label class="col-md-12 p-0">Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Name" name="st_name"
                                        class="form-control p-0 border-0" required>
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">ID</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="ID NO" class="form-control p-0 border-0"
                                        name="st_id" >
                              </div>
                         </div>
                         </div>
                         </div>
                          <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label class="col-md-12 p-0">Class (Optional)</label>
                              <div class="col-md-12 border-bottom p-0">
 <select class="form-control" name="st_class">
                                   <option value="" selected>Choose One...</option>
                                   <option value="play">Play</option>
                                   <option value="nursary">Nursary</option>
                                   <option value="One">One</option>
                                   <option value="Two">Two</option>
                                   <option value="Three">Three</option>
                                   <option value="Four">Four</option>
                                   <option value="Five">Five</option>
                                   <option value="Six">Six</option>
                                   <option value="Seven">Seven</option>
                                   <option value="Eight">Eight</option>
                                   <option value="Eight(Coaching)">Eight (Coaching)</option>
                                   <option value="Nine (Science)">Nine (Science)</option>
                                   <option value="Nine (Arts)">Nine (Arts)</option>
                                   <option value="Ten (Science)">Ten (Science)</option>
                                   <option value="Ten (Arts)">Ten (Arts)</option>
                                   <option value="SSC (Science)">SSC Science</option>
                                   <option value="SSC (Arts)">SSC Arts</option>
                                   <option value="SSC (Commerce)">SSC Commerce</option>
                              </select>
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Mobile</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Mobile No" class="form-control p-0 border-0"
                                        name="st_mobile" >
                              </div>
                         </div>
                         </div>
                         </div>
                         <p>Type 1</p>
                           <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Month 1</label>
                              <div class="col-md-12 border-bottom p-0">
                                    <select class="form-control" name="month_one">
                                   <option value="" selected>Choose One...</option>
                                   
                                   <option value="January">January</option>
                                   <option value="February">February</option>
                                   <option value="March">March</option>
                                   <option value="April">April</option>
                                   <option value="May">May</option>
                                   <option value="June">June</option>
                                   
                                   <option value="July">July</option>
                                   <option value="August">August</option>
                                   <option value="September">September</option>
                                    <option value="October">October</option>
                                   <option value="November">November</option>
                                   <option value="December">December</option>
                                  
                              </select>
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example" class="col-md-12 p-0">Type</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Type One" class="form-control p-0 border-0"
                                        name="type_one">
                              </div>
                         </div>
                         </div>
                         </div>
                           <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Amount One"
                                        class="form-control p-0 border-0" name="amount_one">
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Total Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Total One" class="form-control p-0 border-0"
                                        name="total_one">
                              </div>
                         </div>
                         </div>
                         </div>
                         <p>type 2</p>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Month 2</label>
                              <div class="col-md-12 border-bottom p-0">
                                    <select class="form-control" name="month_two">
                                   <option value="" selected>Choose One...</option>
                                   
                                   <option value="January">January</option>
                                   <option value="February">February</option>
                                   <option value="March">March</option>
                                   <option value="April">April</option>
                                   <option value="May">May</option>
                                   <option value="June">June</option>
                                   
                                   <option value="July">July</option>
                                   <option value="August">August</option>
                                   <option value="September">September</option>
                                    <option value="October">October</option>
                                   <option value="November">November</option>
                                   <option value="December">December</option>
                                  
                              </select>
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Type 2</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Type two" class="form-control p-0 border-0"
                                        name="type_two">
                              </div>
                         </div>
                         </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0"> Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Amount two" class="form-control p-0 border-0"
                                        name="amount_two">
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Total Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Total Amount" class="form-control p-0 border-0"
                                        name="total_two">
                              </div>
                         </div>
                         </div>
                         </div>
                         <p>type 3</p>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Month 3</label>
                              <div class="col-md-12 border-bottom p-0">
                                     <select class="form-control" name="month_three">
                                   <option value="" selected>Choose One...</option>
                                   
                                   <option value="January">January</option>
                                   <option value="February">February</option>
                                   <option value="March">March</option>
                                   <option value="April">April</option>
                                   <option value="May">May</option>
                                   <option value="June">June</option>
                                   
                                   <option value="July">July</option>
                                   <option value="August">August</option>
                                   <option value="September">September</option>
                                    <option value="October">October</option>
                                   <option value="November">November</option>
                                   <option value="December">December</option>
                                  
                              </select>
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Type 3</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Type Three"
                                        class="form-control p-0 border-0" name="type_three">
                              </div>
                         </div>
                         </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Amount three" class="form-control p-0 border-0"
                                        name="amount_three">
                              </div>
                         </div>
                         </div>
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Total Amount</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Total Three" class="form-control p-0 border-0"
                                        name="total_three">
                              </div>
                         </div>
                         </div>
                         </div>
                         
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                             
                         <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                         <div class="form-group mb-12">
                              <label for="example-email" class="col-md-12 p-0">Total </label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Total Amount" class="form-control p-0 border-0"
                                        name="totals" required>
                              </div>
                         </div>
                         </div>
                         </div>
                         
 

                         <div class="form-group mb-4">
                              <div class="col-sm-12">
                                   <button class="btn btn-success">Submit</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
<?php include 'layouts/footer.php'; ?>