<?php //include '../layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">SSC Science Payment Update</h4>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?php echo base_url('admin/science_paymentlist')?>">Payment List</a>
                </div>
            </div>

        </div>
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label class="col-md-12 p-0">Student ID</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $sciencepay_view['st_id'] ?>" class="form-control p-0 border-0"
                                           name="st_id" readonly>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Month</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  value="<?php echo $sciencepay_view['month'] ?>" class="form-control p-0 border-0"
                                           name="month" readonly>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Total Payable</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  value="<?php echo $sciencepay_view['payable'] ?>" class="form-control p-0 border-0"
                                           name="payable" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Pay</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  value="<?php echo $sciencepay_view['pay'] ?>" class="form-control p-0 border-0"
                                           name="pay" readonly>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Due</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  value="<?php echo $sciencepay_view['due'] ?>" class="form-control p-0 border-0"
                                           name="due" readonly>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label class="col-sm-12">Paid</label>
                                <div class="col-sm-12 border-bottom">
                                    <input type="text"  value="<?php echo $sciencepay_view['paid'] ?>" class="form-control p-0 border-0"
                                           name="paid" readonly>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
<?php //include 'layouts/footer.php'; ?>