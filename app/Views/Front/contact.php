<?php include 'layouts/header.php';  ?>
<div id="rs-about" class="rs-about sec-spacer">
     <div class="container">
          <div class="sec-title mb-50 text-center">
               <h2>CONTACT US</h2>
               <p>Lets get in touch & Send us a message:.</p>
          </div>
          <div class="row">

               <div class="col-lg-6 col-md-12">

                    <form class="" action="https://formspree.io/mhrimonkhan@gmail.com" method="POST">
                         <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" name="name" required>
                         </div>
                         <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" name="_replyto">
                         </div>
                         <div class="form-group">
                              <label>Message</label>
                              <textarea class="form-control" type="text" name="subject"></textarea>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="type" id="complain">
                              <label class="form-check-label" for="Complain">
                                   Complain
                              </label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="type" id="suggestion" checked>
                              <label class="form-check-label" for="Suggestion">
                                   Suggestion
                              </label>
                         </div>
                         <br>
                         <button type="submit" class="btn btn-outline-info">Send</button>
                    </form>

               </div>
               <div class="col-lg-6 col-md-12">

                    <!-- Image of location/map -->
                    <iframe
                         src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2923.9457107098287!2d89.48649654138094!3d25.64343862001538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1571422037151!5m2!1sen!2sbd"
                         width="100%" height="430" frameborder="0" style="border:2px black;margin-top: 48px;"
                         allowfullscreen=""></iframe>

               </div>

          </div>
     </div>
</div>
</br>
</br>

<?php include 'layouts/footer.php' ?>