<style>
.row {
     display: -ms-flexbox;
     /* IE10 */
     display: flex;
     -ms-flex-wrap: wrap;
     /* IE10 */
     flex-wrap: wrap;

}

.col-25 {
     -ms-flex: 25%;
     /* IE10 */
     flex: 25%;
}

.col-50 {
     -ms-flex: 50%;
     /* IE10 */
     flex: 50%;
}

.p_output {
     float: left;
     width: 70%;
}

.label {
     font-weight: bold;
     float: left;
     width: 30%;

}
</style>
<button onclick="window.print()" type="button">print</button>
<div style="height:240px;">
     <p
          style="text-align:center;font-size:15px;font-family:Luminari;font-weight:bold;line-height:.1px;color:#AC1318;padding-top:-6px">
          Students Care School</p>
     <p style="text-align:center;line-height:.1px;font-size:14px;color:#AC1318;"></p>
     <p style="text-align:center;line-height:.2px;font-size:15px;font-weight:bold;color:#AC1318"> Teaching Centre
     </p>
     <p style="padding-left:8px;line-height:px;font-size:11px;text-align:center;color:blue;padding-top:-5px;">
          Tambulpur,Pirgachha,Rangpur</p>
     <p style="text-align:center;font-weight:bold;color:purple;font-size:14px;padding-top:-15px">Students ID Card
     </p>
</div>


<div style="background-color:#FEE6FE;color:#000;height:30px;padding-top:-5px;margin-top:0px;padding-bottom:-8px;">
     <div style="text-align:center">
          <img src="<?php echo base_url('/uploads/IDCard') . '/' . $idcardprint['photo'] ?>" alt="student id"
               width="80px" height="60px">

     </div>
     <p style="text-align:center;font-weight:bold;padding-top:-12px;font-size:15px;color:purple">
          <?php echo $idcardprint['st_name'] ?></p>

     <p style="text-align:center;padding-top:-36px;font-size:14px"><?php echo $idcardprint['id_no'] ?></p>
     <p style="text-align:center;padding-top:-16px;font-family:Arial;font-size:14px">Class:
          <?php echo $idcardprint['class'] ?></p>
     <p style="text-align:center;padding-top:-16px;font-size:14px">Section: <?php echo $idcardprint['section'] ?>
     </p>
     <p style="text-align:center;padding-top:-16px;font-size:14px">Phone: <?php echo $idcardprint['mobile'] ?></p>
     <p style="font-size:12px;padding-left:0px;padding-left:5px;padding-top:-15px;"> Web: www.studentscarebd.com
     </p>
</div>
</div>
<script>
function pdf() {
     window.print()

}
</script>