<?php include "layouts/header.php" ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Attendence For Class Eight</h4>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/atn_artsadd' ?>">Attendence Add</a>
                </div>
            </div>

        </div>
        <!-- /.col-lg-12 -->


        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                       <a class="btn btn-danger " href="<?= base_url() . '/admin/attendence' ?>">Back</a>
                        <h3 style="color: red;font-weight:bold;text-align:center">

                            <?php echo session()->getFlashdata('meg'); ?></h3>
                        <div class="table-responsive">

                            <form>

                                <div style="text-align: center;">


                                </div>
                                <table class="table">
                                    <thead>

                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($atn_artslist)) {
                                        $i = 1;
                                        foreach ($atn_artslist as $artslist) { ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $artslist['atn_date'] ?></td>
                                                <td><a target="_blank" href="<?php echo base_url('atn_artsviewdate/' . $artslist['id']); ?>">View</a>||<a target="_blank" href="<?php echo base_url('atn_artsprint/' . $artslist['id']); ?>">print</a> ||
                                                    <a onclick="return confirm('Are you sure to delete this row attendence !')" href="<?php echo base_url('admin/atn_artsdelete/' . $artslist['id']);?>">Delete</a></td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include 'layouts/footer.php' ?>