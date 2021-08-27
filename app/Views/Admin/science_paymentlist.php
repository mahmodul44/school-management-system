<?php include 'layouts/header.php'?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Payment List(Science)</h4>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?php echo base_url('admin/science_paymentadd')?>">Payment Add</a>
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
                        <h3 style="color: red;font-weight:bold;text-align:center">
                            <?php echo session()->getFlashdata('meg'); ?></h3>
                        <div class="table-responsive">
                            <table id="" class="table table-hover">
                                <thead>

                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Student Name</th>
                                    <th class="border-top-0">ID NO</th>
                                    <th class="border-top-0">Class</th>
                                    <th class="border-top-0">Phone</th>
                                    <th class="border-top-0">Month</th>
                                    <th class="border-top-0">Total Payable</th>
                                    <th class="border-top-0">Pay</th>
                                    <th class="border-top-0">Due</th>
                                    <th class="border-top-0">Paid</th>
                                    <th class="border-top-0">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php if (!empty($science_paymentlist)) {
                                    $i = 1 + (2 * ($currentPage-1));
                                    foreach ($science_paymentlist as $sciencelist) { ?>
                                            <?php
                                        $db=db_connect();
                                        $builder = $db->table('tbl_idcard');
                                        $builder->select('*');
                                        $builder->join('tbl_sciencepayment','tbl_sciencepayment.st_id = tbl_idcard.id_no');
                                        //$builder->where('sciencelist->id',$sciencelist->id);
                                        $query   = $builder->get();

                                        ?>
                                            <?php foreach ($query->getResult() as $result)
//                                            echo "<pre>";
//                                            print_r($result->mobile);
//                                                die();
                                                ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td> <?php echo $result->st_name ?> </td>
                                            <td><?php echo $sciencelist['st_id'] ?></td>
                                            <td>SSC (Science)</td>
                                            <td><?php echo $result->mobile ?></td>
                                            <td><?php echo $sciencelist['month'] ?></td>
                                            <td><?php echo $sciencelist['payable'] ?></td>
                                            <td><?php echo $sciencelist['pay'] ?></td>
                                            <td><?php echo $sciencelist['due'] ?></td>
                                            <td><?php echo $sciencelist['paid'] ?></td>
                                            <td><a href="<?php echo base_url('admin/payment/sciencepay_view/' . $sciencelist['id']); ?>">View</a>  ||
                                                <a href="<?php echo base_url('sciencepay_edit/' . $sciencelist['id']); ?>">Edit</a> ||
                                                <a href="<?php echo base_url('sciencepay_print/'.$sciencelist['id'])?>">Print</a> ||
                                                <a onclick="return confirm('Are you sure to delete this row !')" href="<?php echo base_url('admin/sciencepay_delete/'.$sciencelist['id'])?> ">Delete</a> </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td>Records Not Found</td>
                                    </tr> <?php } ?>
                                </tbody>
                            </table>
                            <?= $pager->links('science_paymentlist','data_pagination'); ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


<?php //include 'layouts/footer.php'; ?>