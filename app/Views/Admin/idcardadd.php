<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="idcard">IDCard List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('idcardInsert'); ?>"
                         method="post" enctype="multipart/form-data">
                         <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Student Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Student Full Name" name="st_name"
                                        class="form-control p-0 border-0" required>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">ID Number</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder="Student ID NO" class="form-control p-0 border-0"
                                        name="id_no" required>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Mobile Number</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" placeholder=" Phone Number" class="form-control p-0 border-0"
                                        name="mobile">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label class="col-sm-12">Class</label>
                              <div class="col-sm-12 border-bottom">
                                   <select class="form-control p-0 border-0" name="class">
                                        <option>Select One</option>
                                        <option value="One">One</option>
                                        <option value="Two">Two</option>
                                        <option value="Three">Three</option>
                                        <option value="Four">Four</option>
                                        <option value="Five">Five</option>
                                        <option value="Six">Six</option>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label class="col-sm-12">Section</label>
                              <div class="col-sm-12 border-bottom">
                                   <select class="form-control p-0 border-0" name="section">
                                        <option>Select One</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="Science">Science</option>
                                        <option value="Arts">Arts</option>
                                   </select>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Photo</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="file" class="form-control p-0 border-0" name="photo">
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