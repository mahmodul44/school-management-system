<?php include 'layouts/header.php'; ?>


<!-- Teacher Start -->
<div id="rs-team" class="rs-team sec-color sec-spacer">
     <div class="container">
          <div class="sec-title mb-50 text-center">
               <h2>OUR TEACHERS</h2>
               <p>Our Experienced Teacher List & Contact Details.</p>
          </div>
          <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false"
               data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
               data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
               data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
               data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
               <?php if (!empty($teachers)) {
                    $i = 1;
                    foreach ($teachers as $teacher) { ?>
               <div class="team-item">
                    <div class="team-img">
                         <img src="<?php echo base_url('/uploads/Teacher') . '/' . $teacher['photo'] ?>" alt="images"
                              style="width:100%;height:350px">
                         <div class="normal-text">
                              <h3 class="team-name"><?php echo $teacher['t_name'] ?></h3>
                              <span class="subtitle"><?php echo $teacher['ocupation'] ?></span>
                         </div>
                    </div>
                    <div class="team-content">
                         <div class="overly-border"></div>
                         <div class="display-table">
                              <div class="display-table-cell">
                                   <h3 class="team-name"><a
                                             href="teachers-single.html"><?php echo $teacher['t_name'] ?></a></h3>
                                   <span class="team-title"><?php echo $teacher['ocupation'] ?></span>
                                   <p class="team-desc"><?php echo $teacher['address'] ?></p>
                                   <div class="team-social">
                                        <a href="tel:<?php echo $teacher['mobile'] ?>" class="social-icon"><i
                                                  class="fas fa-phone-alt"></i></a>
                                        <a href="https://www.facebook.com/" class="social-icon"><i
                                                  class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com" class="social-icon"><i
                                                  class="fab fa-twitter"></i></a>
                                        <a href="https://www.google.com" class="social-icon"><i
                                                  class="fab fa-google"></i></a>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <?php }
               } else { ?>
               <div>
                    <h3>Record not found</h3>
               </div> <?php } ?>

          </div>
     </div>
</div>
<!-- Teacher End -->
<?php include 'layouts/footer.php'; ?>