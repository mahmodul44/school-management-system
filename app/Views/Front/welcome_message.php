<?php include 'layouts/header.php' ?>
<style>
.tcontainer {
     width: 100%;
     overflow: hidden;
}

.ticker-wrap {
     width: 100%;
     padding-left: 100%;
     background-color: #eee;
}

@keyframes ticker {
     100% {
          transform: translate3d(-100%, 0, 0);
     }
}

.ticker-move {
     display: inline-block;
     white-space: nowrap;
     padding-right: 100%;
     animation-timing-function: linear;
     animation: ticker 40s infinite;
}

.ticker-move:hover {
     animation-play-state: paused;
}

.ticker-item {
     display: inline-block;
     padding: 0 20px;
     font-size: 16px;
}
</style>
<!-- Toolbar Start -->

<div class="container">

     <div class="row">
          <div class="col-md-12 col-lg-12">
               <div class="rs-toolbar-right">
                    <div class="ticker-wrap">

                         <div class="ticker-move">
                              <?php if (!empty($noticeall)) {
                                   foreach ($noticeall as $notice) { ?>
                              <div class="ticker-item"> <?php echo $notice['notice']; ?></div>
                              <?php }
                              } else { ?>

                              <div class="ticker-item">There are no notice Found
                              </div> <?php } ?>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>
</div>
<!-- Page content -->
<?php include 'layouts/slider.php'; ?>
<!-- About Us Start -->
<div id="rs-about" class="rs-about sec-spacer">
     <div class="container">
          <div class="sec-title mb-50 text-center">
               <h2>Our Services & Notice</h2>
               <p>see our service & notice.</p>
          </div>
          <div class="row">
               <div style="border:1px solid black" class="col-lg-6 col-md-12 col-sm-12">
                    <h3> Services</h3>
                    <div class="row">
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/attendence.jpg" alt="" />
                              </a>
                              <p style="color:black"> Attedence</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a target="_blank" href="admin/login">
                                   <img width="86%" src="Front/images/services/st_info.png" alt="" />
                              </a>
                              <p style="color:black">Student Info</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/fee.png" alt="" />
                              </a>

                              <p>Fees Collection</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/admission.png" alt="" />
                              </a>
                              <p>Admission</p>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/payment.png" alt="" />
                              </a>
                              <p>payment</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/idcard.png" alt="" />
                              </a>
                              <p>Student ID Card</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="admin/login">
                                   <img width="86%" src="Front/images/services/idcard.png" alt="" />
                              </a>
                              <p>teacher IdCard</p>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-4 text-center">
                              <a href="index">
                                   <img width="86%" src="Front/images/services/communicate.png" alt="" />
                              </a>
                              <p>Communicate</p>
                         </div>
                    </div>



               </div>
               <div class="col-lg-6 col-md-12">
                    <div class="about-desc">
                         <h3>Notice Board</h3>

                    </div>
                    <div id="accordion" class="rs-accordion-style1">
                         <div class="card">
                              <?php if (!empty($noticeall)) {
                                   foreach ($noticeall as $notice) { ?>
                              <marquee onmouseover="this.stop();" onmouseout="this.start();" width="95%" direction="up"
                                   height="40px">
                                   <p style="border-bottom:1px solid black;width:50%"><?php echo $notice['notice']; ?>
                                   </p>
                              </marquee>
                              <?php }
                              } else { ?>

                              <marquee>There are no notice Found
                              </marquee> <?php } ?>

                         </div>


                    </div>
               </div>
          </div>
     </div>
</div>
<!-- About institute -->
<div class="rs-latest-news ">
     <div class="container">
          <div class="row">
               <div class=" news-list-block col-md-3">
                    <div class="news-list-item">
                         <div class="news-img">
                              <a href="#">
                                   <img src="Front/images/title_icon.jpg" alt="" />
                              </a>
                         </div>
                         <div class="news-content">
                              <h5 class="news-title"><a href="blog-details.html">প্রতিষ্ঠাতা</a></h5>

                              <div class="news-desc">
                                   <p>
                                        সৃষ্টির ঊষালগ্ন থেকেই মানুষ নিজেকে অন্যের কাছে প্রকাশ করতে চায়। এ প্রকাশ করতে

                                   </p>
                              </div>
                              <div class="">
                                   <a href="aboutsc">Read More</a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class=" news-list-block col-md-3">
                    <div class="news-list-item">
                         <div class="news-img">
                              <a href="#">
                                   <img src="Front/images/leaders/ripon.jpg" alt="" />
                              </a>
                         </div>
                         <div class="news-content">
                              <h5 class="news-title"><a href="">নির্বাহী পরিচালক</a></h5>

                              <div class="news-desc">
                                   <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt.
                                   </p>
                              </div>
                              <div class="">
                                   <a href="aboutedir">Read More</a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class=" news-list-block col-md-3">
                    <div class="news-list-item">
                         <div class="news-img">
                              <a href="">
                                   <img src="Front/images/leaders/mydul.jpg" alt="" />
                              </a>
                         </div>
                         <div class="news-content">
                              <h5 class="news-title"><a href="">কোষাধ্যক্ষ/পরীক্ষা
                                        নিয়ন্ত্রক</a>
                              </h5>

                              <div class="news-desc">
                                   <p>
                                        Excepteur sint occaecat cupidatat non proident,
                                        officia
                                        deserunt.
                                   </p>
                              </div>
                              <div class="">
                                   <a href="aboutcexam">Read More</a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class=" news-list-block col-md-3">
                    <div class="news-list-item">
                         <div class="news-img">
                              <a href="#">
                                   <img src="Front/images/leaders/sukdeb.jpg" alt="" />
                              </a>
                         </div>
                         <div class="news-content">
                              <h5 class="news-title"><a href="">সাধারণ ব্যবস্থাপক</a></h5>

                              <div class="news-desc">
                                   <p>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia
                                        deserunt.
                                   </p>
                              </div>
                              <div class="">
                                   <a href="aboutgm">Read More</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- Counter Up Section Start-->
<div class="rs-counter pt-100 pb-70 bg3">
     <div class="container">
          <div class="row">
               <div class="col-lg-6 col-md-12">
                    <div class="counter-content">
                         <h2 class="counter-title">ACHEIVEMENTS</h2>
                         <div class="counter-text">
                              <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                   mornings
                                   of spring which I enjoy with my whole heart like mine.</p>
                         </div>
                         <div class="counter-img rs-image-effect-shine">
                              <img src="Front/images/counter.jpg" alt="Counter Discussion">
                         </div>
                    </div>
               </div>
               <div class="col-lg-6 col-md-12 mt-80">
                    <div class="row">
                         <div class="col-md-6">
                              <div class="rs-counter-list">
                                   <h2 class="counter-number plus">60</h2>
                                   <h4 class="counter-desc">TEACHERS</h4>
                              </div>
                         </div>
                         <div class="col-md-6">
                              <div class="rs-counter-list">
                                   <h2 class="counter-number plus">16</h2>
                                   <h4 class="counter-desc">COURSES</h4>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6">
                              <div class="rs-counter-list">
                                   <h2 class="counter-number plus">305</h2>
                                   <h4 class="counter-desc">STUDENTS</h4>
                              </div>
                         </div>
                         <div class="col-md-6">
                              <div class="rs-counter-list">
                                   <h2 class="counter-number plus">300</h2>
                                   <h4 class="counter-desc">Satisfied Guardian</h4>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Counter Down Section End -->

<!-- Calltoaction Start -->
<div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
     <div class="container">
          <div class="rs-cta-inner text-center">
               <div class="sec-title mb-50 text-center">
                    <h2 class="white-color">SSC &amp; DHAKIL COURSE</h2>
                    <p class="white-color">ssc & dhakil preparation batch.all section include</p>
               </div>
               <a class="cta-button" href="admissionform">Join Now</a>
          </div>
     </div>
</div>
<!-- Calltoaction End -->

<!-- Partner Start -->
<div id="rs-partner" class="rs-partner pt-70 pb-70">
     <div class="container">
          <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true"
               data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false"
               data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false"
               data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false"
               data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
               <div class="partner-item">
                    <a href="#"><img src="Front/images/partner/1.png" alt="Partner Image"></a>
               </div>
               <div class="partner-item">
                    <a href="#"><img src="Front/images/partner/2.png" alt="Partner Image"></a>
               </div>
               <div class="partner-item">
                    <a href="#"><img src="Front/images/partner/3.png" alt="Partner Image"></a>
               </div>
               <div class="partner-item">
                    <a href="#"><img src="Front/images/partner/4.png" alt="Partner Image"></a>
               </div>
               <div class="partner-item">
                    <a href="#"><img src="Front/images/partner/5.png" alt="Partner Image"></a>
               </div>
          </div>
     </div>
</div>
<!-- Partner End -->
</br>

<?php include 'layouts/footer.php' ?>