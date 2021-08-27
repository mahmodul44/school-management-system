<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Course Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="course">Course List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('course_insert'); ?>"
                         method="post" enctype="multipart/form-data">
                         <div class="form-group mb-4">
                              <label for="photo" class="col-md-12 p-0">Class Image</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="file" class="form-control p-0 border-0" name="photo" required>
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="name" class="col-md-12 p-0">Class Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="classname" required>
                              </div>
                         </div>

                         <div class="form-group mb-4">
                              <label for="fee" class="col-md-12 p-0">Course Fee</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="fee">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="description" class="col-md-12 p-0">Course Description</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="description">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Course Duration</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="duration">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Course Student</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="t_student">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Class Time</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" class="form-control p-0 border-0" name="class_time">
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