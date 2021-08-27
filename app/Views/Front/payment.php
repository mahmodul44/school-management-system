<?php include 'layouts/header.php' ?>
<div style="margin-top: 60px;text-align: center;" class="">
     <h3 style="color: purple;font-family:Arial;line-height: .7px">STUDENTS CARE SCHOOL & TEACHING CENTRE</h3>
     <p style="color: #111;font-family: arial;line-height:.7px">Mayer Dowa Plaza -1st Floor,Tambulpur
          Bazar,Pirgachha,Rangpur</p>
</div>
<div class="row ">
     <div class="col-lg-12 col-md-12 ">
          <div class="text-center">
               <h4 style="font-weight: bold;color: #000">আবেদন ফি পাঠানোর পদ্ধতি</h4>
          </div>
          <h3 style="color: red;font-weight:bold;text-align:center">
               <?php echo session()->getFlashdata('meg'); ?></h3>
          <div class="row">
               <div class="col-lg-6 col-md-6">
                    <h4 style="padding:3px;background-color:red;color:white;text-align:center">Click the image and play
                         the vedio
                         for
                         details
                    </h4>
                    <div class="event-item">
                         <div class="event-img rs-animation-hover">
                              <img src="Front/images/bkash1.png" alt="" />
                              <a class="image-link" href="gallery" title="Demo Vedio " data-toggle="modal"
                                   data-target="#exampleModalCenter"><i class="fab fa-youtube"></i>
                              </a>

                         </div>

                    </div>
               </div>
               <!-- <div class="col-lg-6 col-md-5 pl-2">
                    <video width="95%" height="340" controls>
                         <source src="Front/vedios/payment.mp4" type="video/mp4">
                    </video>
               </div> -->
               <!-- <div class="event-item">
                    <div class="event-img rs-animation-hover">
                         <img src="Front/images/bkash1.png" alt="" style="width:100%;height:300px" />
                         <a class="image-link" href="gallery" title="Demo Vedio " data-toggle="modal"
                              data-target="#exampleModalCenter">vedio
                         </a>
                         <div class="overly-border"></div>
                    </div>

               </div> -->
               <div class="col-lg-5 col-md-5">
                    <h4 style="padding:3px;background-color:red;color:white;text-align:center">Fill up the all field
                         carefully
                    </h4>
                    <form action="<?php echo site_url('insert'); ?>" method="post">
                         <?= csrf_field() ?>


                         <div class="form-group">
                              <label for="inputState">Payment Method</label>
                              <select name="payment_method" class="form-control" required>
                                   <option value="">Select Payment Method</option>
                                   <option value="Bkash">Bkash</option>
                                   <option value="Cash">Cash</option>
                                   <option value="Rocket">Dutch Bangla (Rocket)</option>
                              </select>
                         </div>
                         <div class="form-group ">
                              <label for="name">Student Name</label>
                              <input type="text" name="st_same" class="form-control" placeholder="Student Full Name"
                                   required>
                         </div>
                         <div class="form-group">
                              <label for="ref">Ref Number</label>
                              <input type="text" name="mobile" class="form-control" placeholder="Ref Number" required>
                         </div>
                         <div class="form-group">
                              <label for="cname">TranxID</label>
                              <input type="text" name="trxID" class="form-control" placeholder="Enter TranxID(if)">
                         </div>

                         <input type="submit" name="submit" value="Submit" class="btn btn-success ">
                    </form>
               </div>
          </div>

     </div>

</div>
</br>
</br>
</br>
</br>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Demo Vedio For Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">

                    <video width="95%" height="340" controls>
                         <source src="Front/vedios/payment.mp4" type="video/mp4">
                    </video>

               </div>

          </div>
     </div>
</div>
<?php include 'layouts/footer.php'; ?>