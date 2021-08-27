<?php include 'layouts/header.php' ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">ID Card List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="galleryadd">Gallery Add</a>
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

                         <div class="table-responsive">
                              <table class="table">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Details</th>
                                             <th class="border-top-0">Photo</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($gallery)) {
                                             $i = 1;
                                             foreach ($gallery as $galleries) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $galleries['description'] ?></td>

                                             <td><img src="<?php echo base_url('/uploads/Gallery') . '/' . $galleries['photo'] ?>"
                                                       alt="imges" width="80px" height="60px">
                                             </td>
                                             <td> <a
                                                       href="<?php echo base_url('admin/gallery_delete/' . $galleries['id']); ?>">Delete</a>

                                             </td>
                                        </tr>
                                        <?php }
                                        } else { ?>
                                        <tr>
                                             <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>
<?php include 'layouts/footer.php' ?>