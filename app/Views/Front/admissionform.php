<?php include 'layouts/header.php'; ?>
<div style="margin-top: 60px;text-align: center;" class="">
     <h3 style="text-align:center;line-height:.8px">STUDENTS CARE SCHOOL & TEACHING CENTRE</h3>
     <p style="text-align:center;line-height:.8px;color:#000000">Mayer Dowa Plaza - 1st Floor,Tambulpur Bazar,
     </p>
     <p style="text-align:center;line-height:.1px;color:#000000">Pirgachha,Rangpur</p>
</div>

<div class="row">
     <div class="col-lg-8 col-md-8">
          <div class="container">
               <form action="<?php echo site_url('insert_admission'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="name">Student Name</label>
                              <input type="text" name="Name" class="form-control" id="cletter"
                                   placeholder="Student Full Name" required>
                         </div>
                         <div class="form-group col-md-6">
                              <label for="fname">Father's Name</label>
                              <input type="text" class="form-control" placeholder="Father's name" name="fName">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="mname">Mother's Name</label>
                              <input type="text" name="mName" class="form-control" placeholder="Mother's Name">
                         </div>
                         <div class="form-group col-md-6">
                              <label for="sname">School Name</label>
                              <input type="text" class="form-control" placeholder="School Name" name="sName">
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-4">
                              <label for="class">Class</label>
                              <select class="form-control" name="Section">
                                   <option value="" selected>Choose One...</option>
                                   <option value="play">Play</option>
                                   <option value="nursary">Nursary</option>
                                   <option value="One">One</option>
                                   <option value="Two">Two</option>
                                   <option value="Three">Three</option>
                                   <option value="Four">Four</option>
                                   <option value="Five">Five</option>
                                   <option value="Six">Six</option>
                                   <option value="Seven">Seven</option>
                                   <option value="Eight">Eight</option>
                                   <option value="Eight(Coaching)">Eight (Coaching)</option>
                                   <option value="Nine (Science)">Nine (Science)</option>
                                   <option value="Nine (Arts)">Nine (Arts)</option>
                                   <option value="Ten (Science)">Ten (Science)</option>
                                   <option value="Ten (Arts)">Ten (Arts)</option>
                                   <option value="Science">SSC Science</option>
                                   <option value="Arts">SSC Arts</option>
                                   <option value="Commerce">SSC Commerce</option>
                              </select>
                         </div>
                         <div class="form-group col-md-6">
                              <label for="village">Village</label>
                              <input type="text" name="Village" class="form-control"
                                   placeholder="enter your village name">
                         </div>

                    </div>

                    <div class="form-row">
                         <div class="form-group col-md-4">
                              <label for="union">Union</label>
                              <input type="text" name="uName" class="form-control" placeholder="enter your union name">
                         </div>
                         <div class="form-group col-md-4">
                              <label for="thana">Thana/Upazila</label>
                              <input type="text" name="Thana" class="form-control"
                                   placeholder="Enter your Thana/Upazila">
                         </div>
                         <div class="form-group col-md-4">
                              <label for="inputState">District</label>
                              <select name="District" class="form-control">
                                   <option value="">Choose One...</option>
                                   <option value="Dinajpur">Dinajpur</option>
                                   <option value="Gaibanda">Gaibandha</option>
                                   <option value="Rangpur" selected>Rangpur</option>
                                   <option value="Kurigram">Kurigram</option>
                                   <option value="Lalmonirhat">Lalmonirhat</option>
                                   <option value="Panchagarh">Panchagarh</option>
                                   <option value="Thakurgaon">Thakurgaon</option>
                              </select>
                         </div>

                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-4">
                              <label for="phone">Phone</label>
                              <input type="text" name="Phone" class="form-control"
                                   placeholder="enter your mobile number">
                         </div>

                         <div class="form-group col-md-4">
                              <label for="inputState">Payment Method</label>
                              <select name="Payment" class="form-control">
                                   <option value="">Select Payment Method</option>
                                   <option value="Bkash">Bkash</option>
                                   <option value="Cash">Cash</option>
                                   <option value="Rocket">Dutch Bangla (Rocket)</option>
                              </select>
                         </div>
                         <div class="form-group col-md-4">
                              <legend class="col-form-label col-sm-2 pt-3">Gender</legend>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1"
                                        value="Male">
                                   <label class="form-check-label" for="male">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2"
                                        value="Female">
                                   <label class="form-check-label" for="female">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3"
                                        value="others" disabled>
                                   <label class="form-check-label" for="others">Others</label>
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-4">
                              <label for="class">Date of Birth</label>
                              <input type="date" name="birthDate" class="form-control">
                         </div>
                         <div class="form-group col-md-6">
                              <label style="color: red" for="photo">Image must be 400×500 pixels</label>
                              <input type="file" name="photo" class="form-control">
                         </div>

                    </div>

                    <button type="submit" class="btn btn-secondary">Submit</button>
               </form>
          </div>
     </div>
     </br>

     <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="container pt-4 text-center">
               <h2>নির্দেশিকা </h2>
          </div>
          <div class="pb-3">
               <img width="100%" src="Front/img/fee_info2.png">
          </div>
     </div>
</div>
</br>
</br>
<?php include 'layouts/footer.php' ?>
</body>

</html>