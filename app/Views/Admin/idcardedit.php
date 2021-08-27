<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card Update</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/idcard' ?>">ID Card List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-8 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material"
                         action="<?php echo base_url('admin/update/' . $idcardedit['id']); ?>" method="post"
                         enctype="multipart/form-data">
                         <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Student Name</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" value="<?php echo $idcardedit['st_name'] ?>" name="st_name"
                                        class="form-control p-0 border-0">
                              </div>
                         </div>
                         <!-- <input type="hidden" name="id" value="<?php echo $idcardedit['id']; ?>"> -->
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">ID Number</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" value="<?php echo $idcardedit['id_no'] ?>"
                                        class="form-control p-0 border-0" name="id_no">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Mobile Number</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" value="<?php echo $idcardedit['mobile'] ?>"
                                        class="form-control p-0 border-0" name="mobile">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">class</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" value="<?php echo $idcardedit['class'] ?>"
                                        class="form-control p-0 border-0" name="class">
                              </div>
                         </div>

                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">section</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <input type="text" value="<?php echo $idcardedit['section'] ?>"
                                        class="form-control p-0 border-0" name="section">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">photo</label>
                              <div class="col-md-12 border-bottom p-0">
                                   <img src="<?php echo base_url('uploads/IDCard') . '/' . $idcardedit['photo'] ?>"
                                        alt="images" width="80px" height="60px" name="photo">
                                   <input type="file" class="form-control p-0 border-0" name="photo">
                              </div>
                         </div>
                         <div class="form-group mb-4">
                              <div class="col-sm-12">
                                   <button class="btn btn-success">Update</button>
                                   <!-- <input class="btn btn-success" type="submit" name="submit"
                                        value="Update"> -->
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
<?php include 'layouts/footer.php'; ?>