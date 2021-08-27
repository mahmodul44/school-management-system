<?php include 'layouts/header.php'; ?>
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">SSC Science Payment Add</h4>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?php echo base_url('admin/science_paymentlist')?>">Payment List</a>
                </div>
            </div>

        </div>
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('insertscience_payment'); ?>"
                          method="post">
                        <div class="row">
                        <div class="form-group col-lg-4 col-md-4 mb-4">
                            <label class="col-md-12 p-0">Student ID</label>
                            <div class="col-md-12 border-bottom p-0">
                                <select class="form-control p-0 border-0" name="st_id" required>
                                    <option value="">Select One</option>
                                    <?php foreach ($st_idlist as $idlist){?>
                                    <option value="<?php echo $idlist['id_no'] ?>"><?php echo $idlist['id_no'] ?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 mb-4">
                            <label for="example-email" class="col-md-12 p-0">Month</label>
                            <div class="col-md-12 border-bottom p-0">
                                <select class="form-control p-0 border-0" name="month">
                                    <option value="">Select One</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Total Payable</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Total Payable Amount" class="form-control p-0 border-0"
                                           name="payable" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Pay</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Total Pay Amount" class="form-control p-0 border-0"
                                           name="pay" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label for="example-email" class="col-md-12 p-0">Due</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="due" placeholder="Due amount">
                                </div>
                            </div>
                            <div class="form-group col-lg-4 col-md-4 mb-4">
                                <label class="col-sm-12">Paid</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-control p-0 border-0" name="paid">
                                        <option value="">Select One</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
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