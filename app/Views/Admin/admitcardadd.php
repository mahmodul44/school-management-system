<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Admit Card Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="admitcard">Admit Card List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('admin/admitInsert'); ?>"
                         method="post">
                         <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Examination Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Examination Name" name="exm_name"
                                        class="form-control p-0 border-0" required>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Roll</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Student Roll NO" class="form-control p-0 border-0"
                                        name="roll" required>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Code No & Center Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" Phone Number" class="form-control p-0 border-0"
                                        name="code_no">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Registration No</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Registration No" class="form-control p-0 border-0"
                                        name="reg_no">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Code & Instituation Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" Code & Instituation Name"
                                        class="form-control p-0 border-0" name="code_ins_name">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Session</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Session" class="form-control p-0 border-0"
                                        name="session">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Name Of Examinee</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" Name Of Examinee" class="form-control p-0 border-0"
                                        name="student_name">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Type Of Examinee</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" 	Father's Name" class="form-control p-0 border-0"
                                        name="exm_type">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0"> Father's Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" Type Of Examinee" class="form-control p-0 border-0"
                                        name="fname">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Mother's Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Mother's Name" class="form-control p-0 border-0"
                                        name="mname">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">group</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Group" class="form-control p-0 border-0"
                                        name="section">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Date of Birth</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Date of Birth with language"
                                        class="form-control p-0 border-0" name="dob">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 1</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 1" class="form-control p-0 border-0"
                                        name="code_1">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 2</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 2" class="form-control p-0 border-0"
                                        name="code_2">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 3</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 3" class="form-control p-0 border-0"
                                        name="code_3">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 4</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 4" class="form-control p-0 border-0"
                                        name="code_4">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 5</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 5" class="form-control p-0 border-0"
                                        name="code_5">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Subject 6</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Enter Subject 6" class="form-control p-0 border-0"
                                        name="code_6">
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