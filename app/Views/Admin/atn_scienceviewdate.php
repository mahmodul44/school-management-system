<?php include "layouts/header.php" ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Attendence For Class Seven </h4>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/atn_sciencelist' ?>">Attendence List</a>
                </div>
            </div>

        </div>
        <!-- /.col-lg-12 -->


        <div class="container-fluid">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        

                        <h3 style="color: red;font-weight:bold;text-align:center">

                            <?php echo session()->getFlashdata('msg'); ?></h3>
                        <div class="table-responsive">

                            <form action="<?php echo base_url('atn_scienceupdate' ); ?>" method="post">
                                <div style="text-align: center;">

                                </div>
                                <table class="table">
                                    <thead>

                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">ID NO</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Attendence</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($atn_scienceviewdate)) {
                                        $i = 1;
                                        foreach ($atn_scienceviewdate as $science_view) { ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $science_view['id_no'] ?></td>
                                                <input type="hidden" name="id_no[]">
                                                <td><?php echo $science_view['st_name'] ?></td>
                                                <td><?php echo $science_view['atn_date'] ?>
                                                <input type="hidden" name="atn_date[]" value="<?php echo $science_view['atn_date'] ?>">
                                                </td>

                                                <td> <input type="radio" name="attend[<?php echo $science_view['id_no']; ?>]"
                                                            value="present" <?php if($science_view['attend'] == "present") {echo "checked";} ?> >P
                                                    <input type="radio" name="attend[<?php echo $science_view['id_no']; ?>]"
                                                           value="absent" <?php if($science_view['attend'] == "absent") {echo "checked";} ?>>A

                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                    </tbody>
                                </table>
                                <button type="submit" name="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include 'layouts/footer.php' ?>