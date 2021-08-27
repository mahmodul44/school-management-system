<?php include 'layouts/header.php'; ?>

<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Payment Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="payment">Payment List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-12 col-xlg-9 col-md-12">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('admin/insert_pay'); ?>"
                         method="post">
                         <table class="table table-striped table-hover">

                              <tr>
                                   <td>
                                        <label>Class</label>
                                   </td>
                                   <td>
                                        <select class="form-control p-0 border-0" name="class">
                                             <option>Select One</option>
                                             <option value="One">One</option>
                                             <option value="Two">Two</option>
                                             <option value="Three">Three</option>
                                             <option value="Four">Four</option>
                                             <option value="Five">Five</option>
                                             <option value="Six">Six</option>
                                        </select>

                                   </td>
                                   <td>
                                        <label for="example-email" class="col-md-12 p-0">Student Name</label>
                                   </td>
                                   <td>
                                        <input class="form-control p-0 border-0" name="st_name"
                                             placeholder="student name">
                                   </td>
                              </tr>
                              <tr>
                                   <td><label class="col-md-12 p-0">ID NO</label></td>
                                   <td> <select class="form-control p-0 border-0" name="id_no">
                                             <option>Select One</option>
                                             <option value="One">One</option>
                                             <option value="Two">Two</option>
                                             <option value="Three">Three</option>
                                             <option value="Four">Four</option>
                                             <option value="Five">Five</option>
                                             <option value="Six">Six</option>
                                        </select></td>
                                   <td><label class="col-md-12 p-0">Month</label></td>
                                   <td> <select id="obj_month" class="form-control p-0 border-0" name="month">
                                             <option>Select One</option>
                                             <option value="January">January</option>
                                             <option value="February">February</option>
                                             <option value="March">March</option>
                                             <option value="April">April</option>
                                             <option value="May">May</option>
                                             <option value="June">June</option>
                                        </select>
                                   </td>
                              </tr>
                              <tr>
                                   <td><label for="section" class="col-md-12 p-0">Section</label>
                                   </td>
                                   <td> <select class="form-control p-0 border-0" name="section">
                                             <option>Select One</option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="Science">Science</option>
                                             <option value="Arts">Arts</option>
                                             <option value="Commerce">Commercec</option>
                                        </select>
                                   </td>
                                   <td> <label class="col-sm-12">Select Payment Method</label></td>
                                   <td> <select class="form-control p-0 border-0" name="payment_method">
                                             <option>Select a Payment Method</option>
                                             <option value="Bkash">Bkash</option>
                                             <option value="cash">Cash</option>
                                             <option value="Rocket">Dutch Bangla(Rocket)</option>

                                        </select></td>
                              </tr>



                              <div style="width: 65%;float: left;border-left: 1px solid #435">
                                   <table id="month_area" class="table table-striped">
                                        <thead>
                                             <tr class="primary">
                                                  <th width="20%" style="text-align: center;" colspan="5">
                                                       Payment
                                                       Invoice
                                                  </th>
                                             </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                   </table>
                              </div>


                              <div class="form-group mb-4">
                                   <div class="col-sm-12">
                                        <button class="btn btn-success">Submit</button>
                                   </div>
                              </div>
                         </table>
                    </form>
               </div>
          </div>
     </div>
</div>
<script>
$(document).ready(function() {
     $('#obj_month').change(function() {
          var id = $(this).val();
          var name = $(this).find(':selected').text();

          var tr = "<tr>" +

               "<td><button type='button' class='remove_row btn btn-danger'>X</button></td>" +
               "<td>" + name +
               " <input class='form-control' type='hidden'  name='' value='" + id +
               "'/></td>" +
               "<td><input class='form-control' placeholder='douse' name=''/></td>" +
               "<td><input class='form-control' placeholder='day' name=''/></td>" +
               "<td><input class='form-control' placeholder='instruction' name=''/></td>" +
               "</tr>";


          $('#month_area').append(tr);
          $('.remove_row').click(function() {
               $(this).parent().parent().remove();
          })
     });

});
</script>
<?php include 'layouts/footer.php'; ?>