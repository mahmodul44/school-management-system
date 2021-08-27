<?php include 'layouts/header.php'; ?>
<div class="page-wrapper">

     <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
               <div class="col-lg-9 col-md-4 col-sm-6 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Registration Add</h4>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">

                    <a class="btn btn-danger " href="registration">Registration List</a>
               </div>
          </div>

     </div>
     <div class="col-lg-12 col-xlg-9 col-md-12 ">
          <div class="card">
               <div class="card-body">
                    <form class="form-horizontal form-material" action="<?php echo site_url('registrationInsert'); ?>"
                         method="post" enctype="multipart/form-data">
                         <div class="col-lg-12 col-xlg-9 col-md-12 col-xs-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 col-xs-6">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Registration No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Registration No" name="reg_no"
                                                  class="form-control p-0 border-0" required>
                                        </div>
                                   </div>

                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12 col-xs-6">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Session</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Session" name="session"
                                                  class="form-control p-0 border-0" required>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Name Of Examinee</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Name Of Examinee" name="std_name"
                                                  class="form-control p-0 border-0" required>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Father's Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Examination Father's Name" name="fname"
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
                                             <input type="text" placeholder="Mother's Name" name="mname"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">DOB(In Words)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Date of Birth" name="dob_words"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Date of Birth</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="date" placeholder="Date of Birth" name="dob"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-sm-12 border-bottom">
                                             <select class="form-control p-0 border-0" name="gender">
                                                  <option>Select One</option>
                                                  <option value="Male">Male</option>
                                                  <option value="Female">Female</option>
                                                  <option value="Others">Others</option>

                                             </select>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Jsc Roll</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Mother's Name" name="jsc_roll"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Board</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Board Name" name="board"
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
                                             <input type="text" placeholder="Enter Class" name="class"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Section</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Section" name="section"
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
                                             <input type="text" placeholder="Enter Class Roll" name="class_roll"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Group</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Group" name="groups"
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
                                             <input type="text" placeholder="Enter Instituation Code" name="ins_code"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Institation Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Institation Name" name="ins_name"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Upazila/Thana</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Bangla-1st" name="thana"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">District</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter District" name="district"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-12 col-xlg-9 col-md-12 d-flex">
                              <div class="col-lg-6 col-xlg-9 col-md-12 ">
                                   <div class="form-group mb-12">
                                        <label class="col-md-12 p-0">Bangla-1st</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Upazila/Thana" name="bn_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bangla-2nd</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Bangla-2nd" name="bn_2"
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
                                             <input type="text" placeholder="Enter English 1st" name="en_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">English-2nd</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter English-2nd" name="en_2"
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
                                             <input type="text" placeholder="Enter Math" name="math"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">ICT</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter ICT" name="ict"
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
                                             <input type="text" placeholder="Enter Subject-1" name="code_1"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-2</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Subject-2" name="code_2"
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
                                             <input type="text" placeholder="Enter Subject-3" name="code_3"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-4</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Subject-4" name="code_4"
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
                                             <input type="text" placeholder="Enter Subject-5" name="code_5"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Subject-6</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Subject-6" name="code_6"
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
                                             <input type="text" placeholder="Enter Subject-7" name="code_7"
                                                  class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>

                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Obtional</label>
                                        <div class="col-md-12 border-bottom p-0">
                                             <input type="text" placeholder="Enter Subject-6" name="code_ob"
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
                                             <input type="file" name="photo" class="form-control p-0 border-0">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-6 col-xlg-9 col-md-12">
                                   <div class="form-group mb-4">
                                        <label class="col-sm-12">Examination Type</label>
                                        <div class="col-sm-12 border-bottom">
                                             <select class="form-control p-0 border-0" name="exam_type">

                                                  <option value="Secondery">Secondery </option>
                                                  <option value="Dhakil Examination">Dhakil Examination</option>
                                                  <option value="Junior">Junior</option>
                                                  <option value="Junior Dhakil Certificate Examination">Junior Dhakil
                                                       Certificate Examination</option>
                                             </select>
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