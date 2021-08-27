<?php include 'layouts/header.php' ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Attendence Class List</h4>
               </div>

          </div>

     </div>
     <!-- /.col-lg-12 -->


     <div class="container-fluid">

          <div class="row">
               <div class="col-sm-12">
                    <div class="white-box">


                         <div class="table-responsive">
                             <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
<?php if (session()->get('level') !== 4) { ?>
                                 <a class="btn btn-danger" href="<?= base_url() . '/admin/atn_scienceadd' ?>">Seven</a>
    <?php } ?>
    <?php if (session()->get('level') !== 4) { ?>
                                     <a class="btn btn-danger" href="<?= base_url() . '/admin/atn_artsadd' ?>">Eight</a>
                                 <?php } ?>

<!--                                 <a class="btn btn-danger " href="five">Five</a>-->

                             </div>
                         </div>
                    </div>
               </div>
          </div>

     </div>
</div>
<?php include 'layouts/footer.php' ?>