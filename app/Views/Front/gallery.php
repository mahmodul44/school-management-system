<?php include 'layouts/header.php' ?>
<!-- gallery Start -->
<div id="rs-events" class="rs-events sec-spacer">
     <div class="container">
          <div class="sec-title mb-50 text-center">
               <h2>OUR Gallery</h2>
               <p>See the image</p>
          </div>
          <div class="row">
               <div class="col-md-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                         data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                         data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                         data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                         data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true"
                         data-md-device-dots="true">
                         <?php if (!empty($gallery)) {
                              $i = 1;
                              foreach ($gallery as $galleries) { ?>

                         <div class="event-item">
                              <div class="event-img">
                                   <img src="<?php echo base_url('/uploads/Gallery') . '/' . $galleries['photo'] ?>"
                                        alt="" style="width:100%;height:300px" />
                                   <a class="image-link" href="gallery" title="our gallery ">
                                   </a>
                              </div>
                              <div class="events-details sec-color">

                                   <h5 class="event-title"><?php echo $galleries['description'] ?></h5>


                              </div>
                         </div>
                         <?php }
                         } else { ?>
                         <div>
                              <h3>No Image found</h3>
                         </div> <?php } ?>

                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Events End -->
<?php include 'layouts/footer.php'; ?>