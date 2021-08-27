<!DOCTYPE html>
<html>

<head>
     <style>
     .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 80%;
          opacity: 0.9;
     }

     .bg-img {
          background-image: url(img/login_1.jpg);

     }
     </style>
</head>

<body class="bg-img">
     <div class="card ">
          <div style="width: 300px;height:300px;background-color: #fff;margin:0 auto;margin-top: 50px;padding-left:50px;padding-bottom:20px;padding-top:40px"
               class="card-body">
               <h1>---Admin Login---</h1>
               <?php if (!empty(session()->getFlashdata('meg'))) {
               ?>
               <div>
                    <h3> <?php echo session()->getFlashdata('meg');
                         ?></h3>
               </div><?php  } ?>
               <form class="form-horizontal form-material" action="<?php echo site_url('admin/login'); ?>"
                    method="post">
                    <div class="form-group mb-4">
                         <label for="example-email" style="font-size:22px" class="col-md-12 p-0">User</label>
                         <div class="col-md-12 border-bottom p-0">
                              <input style="padding:8px;width:250px;font-size:20px;border-radius:15px;outline:none"
                                   type="text" class="form-control p-0 border-0" name="user">
                         </div>
                    </div>
                    <div class="form-group mb-4">
                         <label style="font-size:22px" for="password" class="col-md-12 p-0">password</label>
                         <div class="col-md-12 border-bottom p-0">
                              <input style="padding:8px;width:250px;font-size:20px;border-radius:15px;outline:none"
                                   type="password" class="form-control p-0 border-0" name="password">
                         </div>
                    </div>
                    <div style="margin-top: 15px;" class="form-group mb-4">
                         <div class="col-sm-12">
                              <button class="btn">Login</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</body>

</html>