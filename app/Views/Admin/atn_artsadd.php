<?php include "layouts/header.php" ?>

    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Attendence For Class Eight </h4>
                </div>
                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url() . '/admin/atn_artslist' ?>">Attendence List</a>
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
                            <?php echo session()->getFlashdata('msg'); ?></h3>
                        <div class="table-responsive">

                            <form action="<?php echo site_url('atn_artsinsert'); ?>" method="post">

                                <div style="text-align: center;">
                                    <input type="date" name="atn_date" required>

                                </div>
                                <table class="table">
                                    <thead>

                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">ID NO</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($std_arts)) {
                                        $i = 1;
                                        foreach ($std_arts as $arts) { ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $arts['id_no'] ?></td>
                                                <input type="hidden" name="id_no[]">
                                                <td><?php echo $arts['st_name'] ?></td>

                                                <td> <input type="radio" name="attend[<?php echo $arts['id_no']; ?>]"
                                                            value="present" required>P
                                                    <input type="radio" name="attend[<?php echo $arts['id_no']; ?>]"
                                                           value="absent" required>A

                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td>Records Not Found</td>
                                        </tr> <?php } ?>
                                    </tbody>
                                </table>
                                <button type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include 'layouts/footer.php' ?>