<?php include 'layouts/header.php'; ?>

<!-- Courses Start -->
<div id="rs-courses" class="rs-courses sec-color sec-spacer">
     <div class="container">
          <div class="sec-title mb-50 text-center">
               <h2>OUR POPULAR COURSES</h2>
               <p>Choose Your Course And Go To Admission.</p>
          </div>
          <div class="row">
               <div class="col-md-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                         data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                         data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                         data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                         data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true"
                         data-md-device-dots="true">

                         <?php if (!empty($courses)) {
                              $i = 1;
                              foreach ($courses as $course) { ?>
                         <div class="cource-item">
                              <div class="cource-img">

                                   <img width="200px" height="50px"
                                        src="<?php echo base_url('/uploads/course') . '/' . $course['photo'] ?>"
                                        alt="" />

                                   <span class="course-value"><?php echo $course['fee'] ?></span>
                              </div>
                              <div class="course-body">

                                   <h4 class="course-title"><a href="courses"><?php echo $course['classname'] ?></a>
                                   </h4>

                                   <div class="course-desc">
                                        <p>
                                             <?php echo $course['description'] ?>
                                        </p>
                                   </div>
                              </div>
                              <div class="course-footer">
                                   <div class="course-time">
                                        <span class="label">Course Time</span>
                                        <span class="desc"><?php echo $course['duration'] ?></span>
                                   </div>
                                   <div class="course-student">
                                        <span class="label">Course Student</span>
                                        <span class="desc"><?php echo $course['t_student'] ?></span>
                                   </div>
                                   <div class="class-duration">
                                        <span class="label">Class Duration</span>
                                        <span class="desc"><?php echo $course['class_time'] ?></span>
                                   </div>
                              </div>
                              <div class="event-btn">
                                   <a href="admissionform">Go To Admission <i class="fa fa-angle-double-right"></i></a>
                              </div>
                         </div>
                         <?php }
                         } else { ?>
                         <div>
                              <h3>No Data found</h3>
                         </div> <?php } ?>

                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Courses End -->

<?php include 'layouts/footer.php' ?>