<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Admit Card List</h4>
               </div>
               <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="admitcardadd">Admit Card Add</a>
               </div>
          </div>

     </div>
     <!-- /.col-lg-12 -->


     <div class="container-fluid">

          <div class="row">
               <div class="col-sm-12">
                    <div class="white-box">
                         <h3 class="box-title">Basic Table</h3>
                         <p class="text-muted">Add class <code>.table</code></p>
                         <h3 style="color: red;font-weight:bold;text-align:center">
                              <?php echo session()->getFlashdata('data_del'); ?></h3>
                         <div class="table-responsive">
                              <table class="table">
                                   <thead>

                                        <tr>
                                             <th class="border-top-0">#</th>
                                             <th class="border-top-0">Name</th>
                                             <th class="border-top-0">Roll</th>
                                             <th class="border-top-0">Session</th>
                                             <th class="border-top-0">Group</th>
                                             <th class="border-top-0">Action</th>

                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php if (!empty($admitlist)) {
                                             $i = 1;
                                             foreach ($admitlist as $admit) { ?>
                                        <tr>
                                             <td><?php echo $i++; ?></td>
                                             <td><?php echo $admit['student_name'] ?></td>
                                             <td><?php echo $admit['roll'] ?></td>
                                             <td><?php echo $admit['session'] ?></td>
                                             <td><?php echo $admit['section'] ?></td>

                                             <td> <a target="_blank"
                                                       href="
                                                       <?php echo base_url('admin/admitprint/' . $admit['id']); ?>">Print</a>
                                                  ||<a href="<?php echo base_url('admin/admitcard_delete/' . $admit['id']); ?>"
                                                       onclick="return confirm('Are you sure to delete this row !')">Delete</a>||<a
                                                       href="<?php echo base_url('admitcard_edit/' . $admit['id']); ?>">Edit</a>

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
<?php include 'layouts/footer.php'; ?>