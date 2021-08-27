<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="gallery">Gallery List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('admin/galleryInsert'); ?>"
                         method="post" enctype="multipart/form-data">


                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Photo</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="file" class="form-control p-0 border-0" name="photo">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Message</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <textarea rows="5" class="form-control p-0 border-0" name="description"></textarea>
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