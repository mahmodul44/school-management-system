<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Registration Update</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="<?= base_url('admin/registration') ?>">Registration List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-12 col-xlg-9 col-md-12 ">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material"
                         action="<?php echo base_url('admin/registrationUpdate/' . $regedit['id']); ?>" method="post"
                         enctype="multipart/form-data">
                         <div class="col-lg-12 col-xlg-12 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Registration No</label>
                                        <div class="col-md-12  border-bottom p-0">
                                             <input type="text" name="reg_no" class="form-control p-0 border-0"
                                                  value="<?php echo $regedit['reg_no'] ?>">
                                        </div>
                                   </div>

                              </div>
                              <div class="col-lg-6 col-xlg-6 col-md-6  col-sm-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Session</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['session'] ?>" name="session"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Name Of Examinee</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['std_name'] ?>"
                                                  name="std_name" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Father's Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['fname'] ?>" name="fname"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Mother's Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value=" <?php echo $regedit['mname'] ?>" name=" mname"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">DOB(In Words)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value=" <?php echo $regedit['dob_words'] ?>"
                                                  name="dob_words" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Date of Birth</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="date" value="<?php echo $regedit['dob'] ?>" name="dob"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Gender</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['gender'] ?>" name="gender"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Jsc Roll</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['jsc_roll'] ?>"
                                                  name="jsc_roll" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Board</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['board'] ?>" name="board"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Class</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['class'] ?>" name="class"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Section</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['section'] ?>" name="section"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Class Roll</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['class_roll'] ?>"
                                                  name="class_roll" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Group</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['groups'] ?>" name="groups"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Instituation Code</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['ins_code'] ?>"
                                                  name="ins_code" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Institation Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['ins_name'] ?>"
                                                  name="ins_name" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Upazila/Thana</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['thana'] ?>" name="thana"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">District</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['district'] ?>"
                                                  name="district" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Bangla-1st</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['bn_1'] ?>" name="bn_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bangla-2nd</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['bn_2'] ?>" name="bn_2"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">English-1st</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['en_1'] ?>" name="en_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">English-2nd</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['en_1'] ?>" name="en_2"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Math</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['math'] ?>" name="math"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">ICT</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value=" <?php echo $regedit['ict'] ?>" name=" ict"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Subject-1</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_1'] ?>" name="code_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-2</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_2'] ?>" name="code_2"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Subject-3</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_3'] ?>" name="code_3"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-4</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_4'] ?>" name="code_4"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>


                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Subject-5</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_5'] ?>" name="code_5"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-6</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_6'] ?>" name="code_6"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Subject-7</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_7'] ?>" name="code_7"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Obtional</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" value="<?php echo $regedit['code_ob'] ?>" name="code_ob"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Photo</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <img src="<?php echo base_url('uploads/Registration') . '/' . $regedit['photo']; ?>"
                                                  alt="images" width="80px" height="60px" name="photo">
                                             <input type="file" name="photo" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-sm-12">Examination Type</label>
                                        <div class="col-sm-12 border-bottom">
                                             <input type="text" value="<?php echo $regedit['exam_type'] ?>"
                                                  name="exam_type" class="form-control p-0 border-0">
                                        </div>
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