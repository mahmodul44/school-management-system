<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Admission Student List</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/admitstudent' ?>">Student List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-12 col-xlg-12 col-md-12 col-sm-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material">
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-6">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Student Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Name'] ?>"
                                                  name="st_name" class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-12">
                                        <label for="example-email" class="col-md-12 p-0">Father Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['fName'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Mother Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['mName'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">School Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['sName'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">section</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Section'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Payment</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Payment'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Phone</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Phone'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Union Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['uName'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Thana</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Thana'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">District</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['District'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Village</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Village'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Gender</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['Gender'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Date Of Birth</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['birthDate'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6 col-xs-12">
                                   <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Admission
                                             Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $admitstudentview['admissionDate'] ?>"
                                                  class="form-control p-0 border-0" readonly>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">photo</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <img src="<?php echo base_url('uploads/AdmissionForm') . '/' . $admitstudentview['photo']; ?>"
                                        width="150px">

                              </div>
                         </div>
                    </form>
                    <a class="btn btn-danger" href="<?= base_url() . '/admin/admitstudent' ?>">Go to List</a>
               </div>
          </div>
     </div>
</div>
<?php include 'layouts/footer.php'; ?>